@extends('layouts.app')

@section('content')

<style type="text/css">
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 1%;
    height: 1%;
}

	

</style>

    <div class="container text-center">            
        <div class="col-md-12">
    		<div class="form-group">
        	<label>Upload Images</label>
        		<div class="input-group">
            		<span class="input-group-btn">
                		<span class="btn btn-default btn-file">
                    	<input type="file" id="imgInp">
                		</span>
            		</span>
            	
            	<input type="text" class="form-control" readonly>
        		</div>
        	<img id='img-upload' width="50%" />
    		</div>
		</div>

		<a href="/parameters"><div class="cold-md-12"><button type="button" class="btn btn-default">Continue</button></div></a>
    </div><br>
@endsection
