<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    	<a class="navbar-brand text-danger" href="{{ url('/') }}"><b>{{ generalInformation()['application_name'] }}</b></a>
    	
        <button class="navbar-toggler" type="button" 
        	data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
        	aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        	
        	<span class="navbar-toggler-icon"></span>
        	
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pe-3 mb-2 mb-lg-0">
                <li class="nav-item">
                	<a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
            	@if(Auth::check())
                    <li class="nav-item">
                    	<a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                    	<a class="nav-link" href="{{ route('view.profile') }}">My Profile</a>
                    </li>
                @endif
            </ul>
        
            <form class="d-flex pe-3 pb-2 pb-lg-0">
                <input id="search" name="query" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>
            
            @if(!Auth::check())
                <form class="d-flex">
                    <a href="{{ route('login') }}" class="btn btn-outline-info me-2" type="button">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-info me-2" type="button">Register</a>
                </form>
            @endif
            
            @if(Auth::check())
            	<form class="d-flex" method="POST" action="{{ route('logout') }}">
        			@csrf
                	<button type="submit" class="btn btn-outline-danger me-2">LOGOUT</button>
                </form>
            @endif
        </div>
    </div>
</nav>

@section('scriptFooter')
<script>
	var searchURL = "{{ url('/') }}"
    $("#search").on('keypress',function(e) {
        if(e.which == 13) {
            $.get(searchURL);
        }
    });
</script>
@stop