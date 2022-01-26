@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-md-4 offset-md-4">
		<div class="card mt-5 mb-5">
    		<h5 class="text-start mt-3 mb-1 ms-3 me-3">
    			Forgot your password?
			</h5>
			<span class="text-start mt-0 mb-3 ms-3 me-3">
    			No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
			</span>
  			<div class="card-body">
        		<form method="POST" action="{{ route('login') }}">
        			@csrf
    				<div class="mb-3">
                        <label for="email" class="form-label"><b>Email</b></label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    </div>
                    
                    <div class="d-grid gap-2">
                    	<button type="submit" class="btn btn-primary">SEND EMAIL</button>
                	</div>
                </form>
    		</div>
    	</div>
	</div>
</div>
@stop