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

              if(isset($_GET["albumName"])){
                $newAlbumName = $_GET["albumName"];

                if(isset($_GET["changed"])){
                  $originalName = $_GET["changed"];

                  if(DB::select('select * from albums where name = :albName', ['albName' => $originalName]) != null) {

                    DB::update('update albums set name = ? where name = ?', [$newAlbumName, $originalName]);

                    $albumStorage = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix() . "public/" . \Auth::user()->id . "/";

                    rename($albumStorage . $originalName, $albumStorage . $newAlbumName);
                  }

                } else {
        
                  if(DB::select('select * from albums where name = :albName', ['albName' => $newAlbumName]) == null) {
                    DB::insert('insert into albums (name, id_user) values (?, ?)', [$newAlbumName, \Auth::user()->id]);

                    Storage::makeDirectory("public/" . \Auth::user()->id . "/" . $newAlbumName);

                  }
                  
                }
              }

              $albums = DB::select('select * from albums where id_user = :id', ['id' => \Auth::user()->id]);
              foreach ($albums as $album) {
                  echo '<li>';
                    echo '<div class="albumName">';
                      echo '<a href="albums?albumName=' . $album->name . '">' . $album->name . '</a>';
                      
                      echo '<a class="edit" onclick="renameAlbum(\'' . $album->name . '\')">';
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

    <div class="col-lg-8">
      <div class="photos">

        <?php

              if(isset($_GET["albumName"])){
                $albumName = $_GET["albumName"];

                if(DB::select('select * from albums where name = ? and id_user = ?', [$albumName, \Auth::user()->id]) != null) {
                  $album = DB::select('select * from albums where name = ? and id_user = ?', [$albumName, \Auth::user()->id]);

                  $images = DB::select('select * from images where id_album = ?', [$album[0]->id]);

                  $albumStorage = \Auth::user()->id . "/" . $album[0]->name . "/";

                  $numItems = count($images);
                  $i = 0;

                  foreach ($images as $image) {
                    //dd(asset("storage/" . $albumStorage . $image->filename));
                    if($i % 4 == 0) {
                      echo '<div class="row">';
                        echo '<div id="wrapper" class="photos-list">';
                    }
                          echo '<div class="col-lg-2">';
                            echo '<div class="imageField">';
                              echo '<img src="' . asset("storage/" . $albumStorage . $image->filename) . '" class="img-thumbnail">';
                              echo '<a class="remove" onclick="">';
                                echo '<i class="glyphicon glyphicon-remove"></i>';
                              echo '</a>';
                              echo '<p id="0" class="changeable" contenteditable="true">' . $image->name . '</p>';
                            echo '</div>';
                          echo '</div>';
                    $i++;
                    if($i % 4 == 0 || ($i === $numItems)) {
                        echo '</div>';
                      echo '</div>';
                    }
                  }
                }

                echo '<div class="row">';
                  //parse_str('http://127.0.0.1:8000/albums?albumName=Album4', $output);
                  //dd($output);
                  echo Form::open([ 'route' => array('dropzone.uploadfile', 'albumName=' . $albumName), 'files' => true, 'class' => 'dropzone','id'=>"image-upload"]);
              
                  echo Form::close();

                echo '</div>';

              }
              
        ?>
        
          <script type="text/javascript">
              Dropzone.options.imageUpload = {
                  acceptedFiles: ".jpeg,.jpg,.png,.gif"
              };
          </script>

      </div>
    </div>
  </div>
</div> 
    
@endsection
