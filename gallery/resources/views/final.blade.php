@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-2">
      <div class="t_back"><a href="/theme" style="text-decoration: none"><p align="left"><i class="fa fa-arrow-left"></i> Back</p></a></div>
    </div>
    <div class="col-lg-10"></div>
  </div>


  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
      <p class="conditions">We reserve the right to withdraw or amend the service we provide on the Site without notice (see below). We will not be liable if for any reason the Site is unavailable at any time or for any period. From time to time, we may restrict access to some parts of the Site, or our entire Site, to certain users who have registered with us.

  If you choose, or you are provided with, a log-in, password or any other piece of information as part of our security procedures, you must treat such information as confidential, and you must not disclose it to any third party. We have the right to disable any log-in or password, whether chosen by you or allocated by us, at any time, if in our opinion you have failed to comply with any of the provisions of these terms of use.</p>
    </div>
    <div class="col-lg-4"></div>
  </div>

  <div class="demo">
    <div class="row">
        <a target="_blank" href="/show"><button>DEMO</button></a>  
    </div>
  </div>

  <div class="download">     
    <div class="row">
      <a href="{{ asset('web.html') }}" download><button>DOWNLOAD</button></a>  
    </div>
  </div>

  <div class="accept">
    <div class="checkbox">
      <label><input type="checkbox" value="">Accept WebGallery Maker conditions</label>
    </div>
  </div>
</div>
@endsection
