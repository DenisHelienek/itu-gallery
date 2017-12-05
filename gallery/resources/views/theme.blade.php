@extends('layouts.app')

@section('content')
 <div class="row">
  <div class="col-lg-12">
    <div class="c_next"><a href="{{ url('/theme') }}"><p align="right">Next <i class="fa fa-arrow-right"></i></p></a></div>
  </div>
</div>

<div class="row">
  <div class="col-lg-2">
    <div class="albums">
      <ul>
        <li><a href="#"><i class="fa fa-plus"></i> Add albums</a></li>
        <div class="albums-list">
          <li><a href="#">Kocicky</a></li>
          <li><a href="#">Psici</a></li>
          <li><a href="#">Medvede</a></li>
          <li><a href="#">Kacicky</a></li>
        </div>
      </ul>
    </div>
  </div>

  <div class="col-lg-10">
    <div class="photos">
      <ul>
        <li><a href="#"><i class="fa fa-plus"></i> Add photos</a></li>
      </ul>

      <div class="row">
        <div id="wrapper" class="photos-list">
          <div class="col-lg-3">
             <img src="{{ asset('img/cat.jpg') }}" class="img-thumbnail" >
             <p>Cat</p>
          </div>
           <div class="col-lg-3">
             <img src="{{ asset('img/cat.jpg') }}" class="img-thumbnail" > 
             <p>Cat</p> 
          </div>       
          <div class="col-lg-3">
             <img src="{{ asset('img/cat.jpg') }}" class="img-thumbnail" > 
             <p>Cat</p>
          </div>
          <div class="col-lg-3">
             <img src="{{ asset('img/cat.jpg') }}" class="img-thumbnail" > 
             <p>Cat</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="photos-list">
          <div class="col-lg-3">
             <img src="{{ asset('img/cat2.jpg') }}" class="img-thumbnail" > 
             <p>Cat</p>
          </div>
           <div class="col-lg-3">
             <img src="{{ asset('img/cat2.jpg') }}" class="img-thumbnail" > 
             <p>Cat</p>
          </div>       
          <div class="col-lg-3">
             <img src="{{ asset('img/cat2.jpg') }}" class="img-thumbnail" > 
             <p>Cat</p>
          </div>
          <div class="col-lg-3">
             <img src="{{ asset('img/cat2.jpg') }}" class="img-thumbnail" > 
             <p>Cat</p>
          </div>
        </div>
      </div>


    </div>
  </div>
</div> 
    
@endsection
