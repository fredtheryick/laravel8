@extends('layouts.master')

@section('content')
<div class="row">
	@if(count($errors) > 0)
        <div class="col-md-12">
            <div class="alert alert-danger">
                <ul class="m-0">
                    @foreach($errors->all() as $error)
                    	<li>{{ $error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    
    @if(session()->has('success'))
        <div class="col-md-12">
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        </div>
    @endif
    
	<div class="col-md-4">
		<div class="card">
			@if(isset($user->avatar))
    			<img src="{{ asset('storage/' . $user->avatar) }}" class="card-img-top" alt="User Avatar">
			@else
				<img src="{{ asset('storage/avatar.jpg') }}" class="card-img-top" alt="User Avatar">
			@endif
			
  			<div class="card-body">
  				<h5 class="card-title">{{ $user->name }}</h5>
  				<p class="card-text">{!! $user->home_address !!}</p>
    		</div>
			<ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <span>Email</span>
                	<b>{{ $user->email }}</b>
            	</li>
            	<li class="list-group-item d-flex justify-content-between align-items-start">
                    <span>Phone</span>
                	<b>+62{{ $user->telp_no }}</b>
            	</li>
            	<li class="list-group-item d-flex justify-content-between align-items-start">
                    <span>Join Date</span>
                	<b>{{ date("d M Y", strtotime($user->created_at)) }}</b>
            	</li>
            </ul>
    	</div>
	</div>
	
	<div class="col-md-4">
		<div class="card">
    		<div class="card-header"><b>Update Profile</b></div>
  			<div class="card-body">
        		<form method="POST" action="{{ route('update.profile') }}" enctype="multipart/form-data">
        			@csrf
        			<div class="mb-3">
                        <label for="name" class="form-label"><b>Name</b></label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                    </div>
                    
    				<div class="mb-3">
                        <label for="email" class="form-label"><b>Email</b></label>
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}" readonly>
                    </div>
                    
                    <div class="mb-3">
                        <label for="telp_no" class="form-label"><b>Phone</b></label>
                        <div class="input-group">
                            <span class="input-group-text">+62</span>
                            <input type="number" class="form-control" name="telp_no" value="{{ $user->telp_no }}" required>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="home_address" class="form-label"><b>Home Address</b></label>
                        <textarea class="form-control" name="home_address" rows="2" required>{{ $user->home_address }}</textarea>
                    </div>
                    
                    <div class="mb-3">
                    	<label for="home_address" class="form-label"><b>Avatar</b></label>
                        <input type="file" class="form-control" name="avatar">
                    </div>
                    
                    <div class="d-grid gap-2">
                    	<button type="submit" class="btn btn-primary">UPDATE</button>
                	</div>
                </form>
    		</div>
    	</div>
	</div>
	
	<div class="col-md-4">
		<div class="card">
    		<div class="card-header"><b>Change Password</b></div>
  			<div class="card-body">
        		<form method="POST" action="{{ route('change.password') }}">
        			@csrf
        			<div class="mb-3">
                        <label for="old_password" class="form-label"><b>Old Password</b></label>
                        <input type="password" class="form-control" name="old_password" required>
                    </div>
                    
        			<div class="mb-3">
                        <label for="password" class="form-label"><b>New Password</b></label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label"><b>Confirm Password</b></label>
                        <input type="password" class="form-control" name="password_confirmation" required>
                    </div>
                    
                    <div class="d-grid gap-2">
                    	<button type="submit" class="btn btn-primary">CHANGE</button>
                	</div>
                </form>
    		</div>
    	</div>
	</div>
</div>
@stop