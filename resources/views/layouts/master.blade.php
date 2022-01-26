<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ generalInformation()['application_name'] }}</title>
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}" type="text/css">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('font-awesome/css/all.css') }}" type="text/css">
        
        <style type="text/css">
            footer a {
                text-decoration: none;
            }
        </style>
        @yield('scriptHeader')
    </head>
    
    <body>
    	@include('layouts.header')
    	
    	<div class="container-fluid mt-5 pt-4 pb-3">
        	@yield('content')
        	@show
    	</div>
    	
        @include('layouts.footer')
        
        <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
        <script type="text/javascript" src="{{ asset('font-awesome/js/all.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.js') }}"></script>
        @yield('scriptFooter')
        @show
    </body>
</html>