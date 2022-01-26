@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-md-4 offset-md-4">
		<div class="card mt-5 mb-5">
    		<h5 class="text-start mt-3 mb-1 ms-3 me-3">This is a secure area of the application.</h5>
    		<span class="text-start mt-0 mb-3 ms-3 me-3">Please confirm your password before continuing.</span>
  			<div class="card-body">
        		<form method="POST" action="{{ route('password.confirm') }}">
        			@csrf
                    <div class="mb-3">
                        <label for="password" class="form-label"><b>Password</b></label>
                        <input type="password" class="form-control" name="password" required autofocus>
                    </div>
                    
                    <div class="d-grid gap-2">
                    	<button type="submit" class="btn btn-primary">CONFIRM</button>
                	</div>
                </form>
    		</div>
    	</div>
	</div>
</div>
@stop
