@extends('layouts.app')

@section('content')
<div class="container text-center">    
<div class="row">
	<div class="col-lg-4"></div>
	<div class="col-lg-4"><h1>Gallery demonstration</h1></div>
	<div class="col-lg-4"></div>
</div>

<div class="row">
    <div class="col-lg-2">
      <div class="albums">
        <ul>
          <li><h2>Album list</h2></li>
          <div class="albums-list">
            <?php

              if(isset($_GET["name"])){
                $newAlbum = $_GET["name"];
        
                if(DB::select('select * from albums where name = :albName', ['albName' => $newAlbum]) == null) {
                  DB::insert('insert into albums (name, id_user, path) values (?, ?, ?)', [$newAlbum, \Auth::user()->id, "img/" . $newAlbum]);

                  // toto nefunguje - vytvorit album ve slozce img kam se budou ukladat obrazky alba
                  $result = File::makeDirectory(asset('img/') . $newAlbum);
                }
              }

              $albums = DB::select('select * from albums where id_user = :id', ['id' => \Auth::user()->id]);
              foreach ($albums as $album) {
                  echo '<li><a href="#" style="cursor: pointer;">' . $album->name . '</a></li>';
              }
            ?>
          </div>
        </ul>
      </div>
    </div>

    <div class="col-lg-10">
      <div class="photos">
        <ul>
          <li><h1>{{ $album->name  }}</h1></li>
        </ul>

        <div class="show">
	<div class="row">
		<div class="col-lg-4"><img src="{{ asset('img/cat.jpg') }}" width="75%" style="border-radius: 25px;"></div>
		<div class="col-lg-4"><img src="{{ asset('img/cat.jpg') }}" width="75%" style="border-radius: 25px;"></div>
		<div class="col-lg-4"><img src="{{ asset('img/cat.jpg') }}" width="75%" style="border-radius: 25px;"></div>
	</div>	

	<div class="row">
		<div class="col-lg-4"><img src="{{ asset('img/cat2.jpg') }}" width="75%" style="border-radius: 25px;"></div>
		<div class="col-lg-4"><img src="{{ asset('img/cat2.jpg') }}" width="75%" style="border-radius: 25px;"></div>
		<div class="col-lg-4"><img src="{{ asset('img/cat2.jpg') }}" width="75%" style="border-radius: 25px;"></div>
	</div>	

	<div class="row">
		<div class="col-lg-4"><img src="{{ asset('img/cat.jpg') }}" width="75%" style="border-radius: 25px;"></div>
		<div class="col-lg-4"><img src="{{ asset('img/cat.jpg') }}" width="75%" style="border-radius: 25px;"></div>
		<div class="col-lg-4"><img src="{{ asset('img/cat.jpg') }}" width="75%" style="border-radius: 25px;"></div>
	</div>		
</div>   

      </div>
    </div>
</div>
</div><br>

@endsection

