@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-md-4 offset-md-4">
		<div class="card mt-5 mb-5">
    		<h2 class="text-start mt-3 mb-0 ms-3 me-3">Hi, guest.</h2>
    		<h2 class="text-start mt-0 mb-3 ms-3 me-3">Please register.</h2>
    		
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
        		<form method="POST" action="{{ route('register') }}">
        			@csrf
        			<div class="mb-3">
                        <label for="name" class="form-label"><b>Name</b></label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                    </div>
                    
    				<div class="mb-3">
                        <label for="email" class="form-label"><b>Email</b></label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="{{ old('email') }}" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="telp_no" class="form-label"><b>Phone</b></label>
                        <div class="input-group">
                            <span class="input-group-text">+62</span>
                            <input type="number" class="form-control" name="telp_no" value="{{ old('telp_no') }}" required>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="home_address" class="form-label"><b>Home Address</b></label>
                        <textarea class="form-control" name="home_address" rows="2" required>{{ old('home_address') }}</textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="form-label"><b>Password</b></label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label"><b>Confirm Password</b></label>
                        <input type="password" class="form-control" name="password_confirmation" required>
                    </div>
                    
                    <div class="d-grid gap-2">
                    	<button type="submit" class="btn btn-primary">REGISTER</button>
                	</div>
                </form>
    		</div>
    	</div>
	</div>
</div>
@stop
