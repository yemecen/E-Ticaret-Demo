@extends('layout')
@section('title','Sepet')

@section('content')
	@if (Session::has('ShoppingCard'))
	    <div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<ul class="list-group">
					@foreach ($products as $product)
						<li class="list-group-item">
							<span class="badge">{{$product['quantity']}}</span>
							<strong>{{$product['item']['attributes']['name']}}</strong>
							<span class="label label-success">{{$product['price']}} TL</span>
							<span><a href="shoppingCard/Decrease/{{$product['item']['attributes']['id']}}"><i class="fas fa-minus"></i></a></span>
							<span><a href="shoppingCard/Increase/{{$product['item']['attributes']['id']}}"><i class="fas fa-plus"></i></a></span>
						</li>
					@endforeach
				</ul>
			</div>
	    </div>
	    <div class="row">
	    	<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
	    		<strong>Sepet Toplam Tutarı: {{$totalPrice}}</strong>	    		
	    	</div>
	    </div>
	@else
		<div class="row">
	    	<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
			<h2>Sepet Boş.</h2>
	    	</div>
		</div>
	@endif
@endsection()