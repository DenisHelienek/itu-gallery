@extends('layouts.app')

@section('content')
<div class="container-fluid">
 <div class="row">
    <div class="col-lg-2">
      <div class="t_back"><a href="{{ url('/albums') }}" style="text-decoration: none"><p align="left"><i class="fa fa-arrow-left"></i> Back</p></a></div>
    </div>
    <div class="col-lg-8"></div>
    <div class="col-lg-2">
      <div class="t_next"><a href="{{ url('/final') }}" style="text-decoration: none"><p align="right">Next <i class="fa fa-arrow-right"></i></p></a></div>
    </div>
  </div>

  <div class="theme">
    <div class="row">
      <div class="col-lg-4"></div>
        <div class="col-lg-4">
          <p>Number of images in one row</p>
        </div>
      <div class="col-lg-4"></div>
    </div>

    <div class="row">
      <div class="col-lg-4"></div>
        <div class="col-lg-4">
          <input id="s1" data-slider-id='slider' type="text" data-slider-min="2" data-slider-max="8" data-slider-step="1" data-slider-value="5"/>
        </div>
      <div class="col-lg-4"></div>
    </div>

    <div class="row">
      <div class="col-lg-4"></div>
        <div class="col-lg-4">
          <p>Number of rows in one page.</p>
        </div>
      <div class="col-lg-4"></div>
    </div>

    <div class="row">
      <div class="col-lg-4"></div>
        <div class="col-lg-4">
          <input id="s2" data-slider-id='slider' type="text" data-slider-min="2" data-slider-max="8" data-slider-step="1" data-slider-value="5"/>
        </div>
      <div class="col-lg-4"></div>
    </div>

    <div clas="row">
      <p>Theme</p>
    </div>
  </div>

  
  <div class="container-fluid">
    <div class="row">
      <div class="squares">
      <a href="#">
        <div class="square-container">
          <div class="square light"></div>
          <p>Light</p>
        </div>
      </a>
      <a href="#">
        <div class="square-container">
          <div class="square dark"></div>
          <p>Dark</p>
        </div>
      </a>
      <a href="#">
        <div class="square-container">
          <div class="square aqua"></div>
          <p>Aqua</p>
        </div>
      </a> 
      <a href="#">
        <div class="square-container">
          <div class="square artist"></div>
          <p>Artist</p>
        </div>
      </a>  
    </div>
  </div>

  <script type="text/javascript">
    $('.square-container').on('click', function() {
      $('.square-container').removeClass('selected');
      $(this).addClass('selected');
    });
  </script>
</div>

@endsection
