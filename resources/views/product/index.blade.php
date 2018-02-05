@extends('layout')
@section('title','Ürünler')

@section('content')
<div class="container">
	<div class="row">
		@foreach ($product as $item)
			<div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="{{$item->image}}" width="700px" height="700px">
			      <div class="caption">
			        <h3>{{$item->name}}</h3>
			        <p>{{$item->price}}</p>
			        <p><a href="product/{{$item->id}}" class="btn btn-primary" role="button">İncele</a> <a href="#" class="btn btn-default" role="button">Sepete Ekle</a></p>
			      </div>
			    </div>
			</div>
		@endforeach
		
	</div>
</div>
@endsection()