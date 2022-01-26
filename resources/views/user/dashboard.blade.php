@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
    		<div class="card-header">
    			Selamat Datang, <b>{{ $user->name }}</b>!
    		</div>
    		<div class="card-body">
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis libero purus, at bibendum massa posuere eu. 
    			Aenean in suscipit nisl. In pulvinar nunc at tellus commodo, non dapibus enim placerat. 
    			Nullam sit amet diam ultrices, semper sem quis, ultricies est. Phasellus eleifend auctor augue nec luctus. 
    			Phasellus rutrum auctor turpis, in placerat ex viverra vel. Duis faucibus dignissim nibh, a imperdiet metus vehicula eget. 
    			Integer quis nibh sagittis, ultrices libero id, venenatis justo. Phasellus molestie leo nec metus semper pulvinar. 
    			Nulla sed metus blandit sem venenatis auctor.</p>
    			
    			<p>Aenean sodales nisi magna, non ornare erat tincidunt sed. In et viverra arcu, tempus rutrum dui. 
    			Proin eu nisi viverra, finibus eros at, tempor mauris. Sed convallis, nisi a dictum egestas, felis libero elementum nibh, eu maximus ante ipsum id metus. 
    			Mauris fringilla malesuada tincidunt. Donec turpis nibh, auctor non libero non, facilisis dignissim quam. 
    			Curabitur faucibus tempus tellus, rhoncus posuere tellus pharetra non. Nunc sagittis arcu vitae velit pretium elementum.</p>
    			
    			<p>Maecenas vel congue ipsum. Vestibulum tristique mi non iaculis tempus. Nullam nec neque sed elit pulvinar maximus sit amet nec risus. 
    			Proin tempor nisl sed lobortis sodales. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
    			Quisque sit amet felis molestie odio porttitor aliquet nec quis mi. Praesent accumsan ipsum quis sem fringilla blandit. 
    			Sed at dolor fringilla, molestie lectus eu, auctor sem. Donec ut vestibulum magna. Etiam vitae posuere lacus. Aenean eget lobortis purus. 
    			Phasellus fermentum dui in magna auctor efficitur.</p>
    		</div>
    	</div>
	</div>
</div>
@stop