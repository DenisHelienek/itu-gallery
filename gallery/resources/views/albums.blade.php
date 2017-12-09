@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-10"></div>
    <div class="col-lg-2">
      <div class="t_next"><a href="/theme" style="text-decoration: none"><p align="right">Next <i class="fa fa-arrow-right"></i></p></a></div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-2">
      <div class="albums">
        <ul>
          <li><a onclick="createAlbum()" style="cursor: pointer;"><i class="fa fa-plus"></i> Add albums</a></li>
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
                  echo '<li>';
                    echo '<div class="albumName">';
                      echo '<a href="gallery?name=' . $album->name . '">' . $album->name . '</a>';
                      echo '<a class="edit" onclick="">';
                        echo '<i class="glyphicon glyphicon-pencil"></i>';
                      echo '</a>';
                    echo '</div>';
                  echo '</li>';
              }
            ?>
          </div>
        </ul>
      </div>
    </div>

    <div class="col-lg-10">
      <div class="photos">
        <ul>
          <li><a href="#"><i class="fa fa-plus"></i> Add photos</a></li>
        </ul>

        <?php

              if(isset($_GET["name"])){
                $albumName = $_GET["name"];

                if(DB::select('select * from albums where name = :albName', ['albName' => $albumName]) != null) {
                  $album = DB::select('select id from albums where name = :albName', ['albName' => $albumName]);

                  $images = DB::select('select * from images where id_user = ? and id_album = ?', [\Auth::user()->id, $album[0]->id]);

                  $i = 0;

                  foreach ($images as $image) {
                    if($i % 5 == 0) {
                      echo '<div class="row">';
                        echo '<div id="wrapper" class="photos-list">';
                    }
                          echo '<div class="col-lg-2">';
                            echo '<div class="imageField">';
                              echo '<img src="' . asset($image->path_ico) . '" class="img-thumbnail">';
                              echo '<a class="remove" onclick="">';
                                echo '<i class="glyphicon glyphicon-remove"></i>';
                              echo '</a>';
                              echo '<p id="0" class="changeable" contenteditable="true">' . $image->name . '</p>';
                            echo '</div>';
                          echo '</div>';
                    if($i % 5 == 4) {
                        echo '</div>';
                      echo '</div>';
                    }
                    $i++;
                  }
                }
              }
        ?>

      </div>
    </div>
  </div>
</div> 
    
@endsection
