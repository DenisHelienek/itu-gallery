@extends('layouts.app')

@section('content')

 <div class="row">
  <div class="col-lg-6">
    <div class="t_back"><a href="{{ url('/gallery') }}"><p align="left"><i class="fa fa-arrow-left"></i> Back</p></a></div>
  </div>

  <div class="col-lg-6">
    <div class="t_next"><a href="{{ url('/final') }}"><p align="right">Next <i class="fa fa-arrow-right"></i></p></a></div>
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
      <input id="s1" data-slider-id='slider' type="text" data-slider-min="0" data-slider-max="6" data-slider-step="1" data-slider-value="3"/>
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
      <input id="s2" data-slider-id='slider' type="text" data-slider-min="0" data-slider-max="7" data-slider-step="1" data-slider-value="4"/>
    </div>
  <div class="col-lg-4"></div>
</div>

<div clas="row">
  <p>Theme</p>
</div>
</div>



<div class="row">
  <div class="squares">
    <div class="square light"></div>
  
    <div class="square dark"></div>
  
    <div class="square aqua"></div> 

    <div class="square artist"></div>  
  </div>
</div>


@endsection
