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
            <div class="col-lg-2">
              <img src="{{ asset('img/cat.jpg') }}" class="img-thumbnail" >
              <p id="0" class="changeable" contenteditable="true">Cat</p>
            </div>
             <div class="col-lg-2">
               <img src="{{ asset('img/cat.jpg') }}" class="img-thumbnail" > 
               <p id="1" class="changeable" contenteditable="true">Cat</p>
            </div>       
            <div class="col-lg-2">
              <img src="{{ asset('img/cat.jpg') }}" class="img-thumbnail" > 
              <p id="2" class="changeable" contenteditable="true">Cat</p>
            </div>
            <div class="col-lg-2">
              <img src="{{ asset('img/cat.jpg') }}" class="img-thumbnail" > 
              <p id="3" class="changeable" contenteditable="true">Cat</p>
            </div>
            <div class="col-lg-2">
              <img src="{{ asset('img/cat.jpg') }}" class="img-thumbnail" > 
              <p id="4" class="changeable" contenteditable="true">Cat</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div id="wrapper" class="photos-list">
            <div class="col-lg-2">
              <img src="{{ asset('img/cat2.jpg') }}" class="img-thumbnail" >
              <p id="5" class="changeable" contenteditable="true">Cat</p>
            </div>
             <div class="col-lg-2">
              <img src="{{ asset('img/cat2.jpg') }}" class="img-thumbnail" > 
              <p id="6" class="changeable" contenteditable="true">Cat</p>
            </div>       
            <div class="col-lg-2">
              <img src="{{ asset('img/cat2.jpg') }}" class="img-thumbnail" > 
              <p id="7" class="changeable" contenteditable="true">Cat</p>
            </div>
            <div class="col-lg-2">
              <img src="{{ asset('img/cat2.jpg') }}" class="img-thumbnail" > 
              <p id="8" class="changeable" contenteditable="true">Cat</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      $(function(){
      
        $('body').on("click", ".changeable", function(e){
          
          var text = $(this).text();
          
          $(this).html("<input type='text' class='input-editable' value='" + text + "'>");
          
          $(this).find('input').focus();
        });
        
        $('body').on("blur", ".input-editable", function(e){
          
          var text = $(this).val();
        
          $(this).parent().html(text);
          
          console.log("Value changes to: " + text);
        });

      });
    </script>
  </div>
</div> 
    
@endsection
