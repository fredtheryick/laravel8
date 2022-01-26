@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-md-4 offset-md-4">
		<div class="card mt-5 mb-5">
    		<h5 class="text-start mt-3 mb-1 ms-3 me-3">Thanks for signing up!</h5>
    		<span class="text-start mt-0 mb-3 ms-3 me-3">
    			Before getting started, could you verify your email address by clicking on the link we just emailed to you? 
    			If you didn't receive the email, we will gladly send you another.
			</span>
  			<div class="card-body">
        		<form method="POST" action="{{ route('verification.send') }}">
        			@csrf
                    <div class="d-grid gap-2 mb-3">
                    	<button type="submit" class="btn btn-primary">RESEND VERIFICATION EMAIL</button>
                	</div>
                </form>
                
                <form method="POST" action="{{ route('logout') }}">
        			@csrf
                    <div class="d-grid gap-2 mb-3">
                    	<button type="submit" class="btn btn-danger">LOGOUT</button>
                	</div>
                </form>
    		</div>
    	</div>
	</div>
</div>
@stop
