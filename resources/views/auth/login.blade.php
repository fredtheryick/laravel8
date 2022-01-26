@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-md-4 offset-md-4">
		<div class="card mt-5 mb-5">
    		<h2 class="text-start mt-3 mb-0 ms-3 me-3">Hi, guest.</h2>
    		<h2 class="text-start mt-0 mb-3 ms-3 me-3">Please login.</h2>
    		
    		@if(count($errors) > 0)
                <div class="alert alert-danger ms-3 me-3">
                    <ul class="m-0">
                        @foreach($errors->all() as $error)
                        	<li>{{ $error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    		
  			<div class="card-body">
        		<form method="POST" action="{{ route('login') }}">
        			@csrf
    				<div class="mb-3">
                        <label for="email" class="form-label"><b>Email</b></label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="form-label"><b>Password</b></label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="remember" onclick="CBSelectedValueToTrue(this);">
                        <label class="form-check-label" for="remember">Remember me!</label>
                    </div>
                    
                    <div class="d-grid gap-2 mb-3">
                    	<button type="submit" class="btn btn-primary">LOGIN</button>
                	</div>
                	
                	<div class="float-end">
                		@if(Route::has('password.request'))
                        	<a class="text-danger" href="{{ route('password.request') }}">Forgot password?</a>
                    	@endif
                    </div>
                </form>
    		</div>
    	</div>
	</div>
</div>
@stop

@section('scriptFooter')
<script>
	function CBSelectedValueToTrue(cb) {
		if (cb.checked) {
			cb.value = "true";
		}
	}
</script>
@stop
