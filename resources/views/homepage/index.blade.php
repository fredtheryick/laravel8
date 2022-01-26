@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-sm-12 col-md-12 col-lg-12">
		<div class="table-responsive">
			<span>There {{ $users->total() > 1 ? 'are ' . $users->total() . ' rows of data' : 'is ' . $users->total() . ' row of data' }}.</span>
        	<table class="table table-hover">
        		<thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Avatar</th>
                        <th scope="col">
                        	@if ('name' == Request::input('order') && 'asc' == Request::input('sort'))
                                <a href="{{ urlGetParams(Request::input(), array('order' => 'name', 'sort' => 'desc')) }}">Name</a>
                                <i class="fas fa-sort-alpha-down" aria-hidden="true"></i>
                            @elseif ('name' == Request::input('order') && 'desc' == Request::input('sort'))
                                <a href="{{ urlGetParams(Request::input(), array('order' => 'name', 'sort' => 'asc')) }}">Name</a>
                                <i class="fas fa-sort-alpha-up" aria-hidden="true"></i>
                            @else
                                <a href="{{ urlGetParams(Request::input(), array('order' => 'name', 'sort' => 'asc')) }}">Name</a>
                            @endif
                    	</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">
                        	@if ('created_at' == Request::input('order') && 'asc' == Request::input('sort'))
                                <a href="{{ urlGetParams(Request::input(), array('order' => 'created_at', 'sort' => 'desc')) }}">Join Date</a>
                                <i class="fas fa-sort-numeric-down" aria-hidden="true"></i>
                            @elseif ('created_at' == Request::input('order') && 'desc' == Request::input('sort'))
                                <a href="{{ urlGetParams(Request::input(), array('order' => 'created_at', 'sort' => 'asc')) }}">Join Date</a>
                                <i class="fas fa-sort-numeric-up" aria-hidden="true"></i>
                            @else
                                <a href="{{ urlGetParams(Request::input(), array('order' => 'created_at', 'sort' => 'asc')) }}">Join Date</a>
                            @endif
                    	</th>
                    </tr>
                </thead>
                <tbody>
                @if (!$users->isEmpty())
                	@foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>
                                @if(isset($user->avatar))
            						<img src="{{ asset('storage/' . $user->avatar) }}" class="card-img-top" alt="User Avatar" style="height: 20px; width:auto;">
        						@endif
    						</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>+62{{ $user->telp_no }}</td>
                            <td>{{ date("d/M/Y", strtotime($user->created_at)) }}</td>
                        </tr>
                	@endforeach
            	@endif
                </tbody>
    		</table>
		</div>
		
		<div class="mt-3 mb-3 mt-md-2 mb-md-2 mt-lg-1 mb-lg-1">
            {{ $users->links() }}
		</div>
	</div>
</div>
@stop
