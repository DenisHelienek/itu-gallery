@extends('layouts.app')

@section('content')
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

?>

&nbsp;

<div class="container text-center">    
<div class="theme-color">
<div class="row">
<div class="container gallery-container">

    <h1>Gallery demonstration</h1>

    <?php
  	foreach ($albums as $album) {
  	   echo "<a href=\"#\"> $album->name </a> ";	
  	}
    ?>
    
    <div class="tz-gallery">

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="{{ asset('img/1.jpg')}}">
                    <img src="{{ asset('img/1.jpg')}}" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="{{ asset('img/2.jpg')}}">
                    <img src="{{ asset('img/2.jpg')}}" alt="Park">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="{{ asset('img/3.jpg')}}">
                    <img src="{{ asset('img/3.jpg')}}" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="{{ asset('img/4.jpg')}}">
                    <img src="{{ asset('img/4.jpg')}}" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="{{ asset('img/5.jpeg')}}">
                    <img src="{{ asset('img/5.jpeg')}}" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="{{ asset('img/6.jpg')}}">
                    <img src="{{ asset('img/6.jpg')}}" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="{{ asset('img/7.jpeg')}}">
                    <img src="{{ asset('img/7.jpeg')}}" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="{{ asset('img/8.jpg')}}">
                    <img src="{{ asset('img/8.jpg')}}" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="{{ asset('img/9.jpg')}}">
                    <img src="{{ asset('img/9.jpg')}}" alt="Park">
                </a>
            </div>
        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script> 

      </div>
    </div>
</div>
</div>
</div><br>

@endsection

