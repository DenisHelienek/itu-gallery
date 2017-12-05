@extends('layouts.app')

@section('content')
<div id="MainCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#MainCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#MainCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="{{ asset('img/main1.jpg') }}" alt="Image">
        <div class="carousel-caption">
          <button type="button" class="btn btn-success btn-lg">Live preview</button> &nbsp; &nbsp;
          <button type="button" class="btn btn-info btn-lg">Create gallery</button>
        </div>      
      </div>

      <div class="item">
        <img src="{{ asset('img/main2.jpg') }}" alt="Image">
        <div class="carousel-caption">
          <button type="button" class="btn btn-success btn-lg">Live preview</button> &nbsp; &nbsp;
          <button type="button" class="btn btn-info btn-lg">Create gallery</button>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#MainCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#MainCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
@endsection
