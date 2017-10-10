@extends('layouts.app')

@section('content')
    <div class="container text-center">            
        <div class="col-md-6">
            <h3>Parameters</h3><br>	
        <form>
  			<div class="form-group">
    			<label for="text">Size</label>
    			<input type="text" class="form-control" id="text">
  			</div>
  
  			<div class="form-group">
    			<label for="text">Shapes:</label>
    			<input type="text" class="form-control" id="text">
  			</div>

  			<div class="form-group">
    			<label for="text">Title</label>
    			<input type="text" class="form-control" id="text">
  			</div>

   			<div class="form-group">
    			<label for="text">Description:</label>
    			<input type="text" class="form-control" id="text">
  			</div>

  			<div class="form-group">
    			<label for="text">Theme:</label>
    			<input type="text" class="form-control" id="text">
  			</div>
  			
  			<button type="submit" class="btn btn-default">Generate</button>
  			<button type="submit" class="btn btn-default">Preview</button>
		</form> 
		</div>

		<div class="col-md-6">
            <h3>Preview</h3><br>
            <img class="img-responsive" style="margin: 0 auto;" src="http://images.clipartpanda.com/round-clipart-round-clipart-1.jpg" alt="Chania">
        </div>	
    </div><br>
@endsection
