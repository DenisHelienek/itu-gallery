@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-lg-4"></div>
	<div class="col-lg-4"><h1>Album DEMO</h1></div>
	<div class="col-lg-4"></div>
</div>

<div class="show">
	<div class="row">
		<div class="col-lg-4"><img src="{{ asset('img/cat.jpg') }}" width="75%"></div>
		<div class="col-lg-4"><img src="{{ asset('img/cat.jpg') }}" width="75%"></div>
		<div class="col-lg-4"><img src="{{ asset('img/cat.jpg') }}" width="75%"></div>
	</div>	

	<div class="row">
		<div class="col-lg-4"><img src="{{ asset('img/cat2.jpg') }}" width="75%"></div>
		<div class="col-lg-4"><img src="{{ asset('img/cat2.jpg') }}" width="75%"></div>
		<div class="col-lg-4"><img src="{{ asset('img/cat2.jpg') }}" width="75%"></div>
	</div>	

	<div class="row">
		<div class="col-lg-4"><img src="{{ asset('img/cat.jpg') }}" width="75%"></div>
		<div class="col-lg-4"><img src="{{ asset('img/cat.jpg') }}" width="75%"></div>
		<div class="col-lg-4"><img src="{{ asset('img/cat.jpg') }}" width="75%"></div>
	</div>		
</div>   

@endsection

