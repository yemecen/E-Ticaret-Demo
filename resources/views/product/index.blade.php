@extends('layout')
@section('title','Ürünler')

@section('content')
<div class="container">
	<div class="row">
		<!--Sıralama-->
		<div class="panel panel-default">
			  <div class="panel-body">
			    <ul class="nav navbar-nav navbar-right">
				    <li class="dropdown">
					      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Akıllı Sıralama <span class="caret"></span></a>

					      <ul class="dropdown-menu">
					        <li><a href="product/orderByName">İsme Göre</a></li>
					        <li><a href="product/orderByPrice">Fiyata Göre</a></li>
					      </ul>
				    </li>
				  </ul> 
			  </div>
		</div>
		
		@foreach ($product as $item)
			<div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="{{$item->image}}" width="700px" height="700px">
			      <div class="caption">
			        <h3>{{$item->name}}</h3>
			        <p>{{$item->price}}</p>
			        <p><a href="product/{{$item->id}}" class="btn btn-primary" role="button">İncele</a> 
			           <a href="shoppingCard/{{$item->id}}" class="btn btn-default" role="button">Sepete Ekle</a>
			       	</p>
			      </div>
			    </div>
			</div>
		@endforeach
		
	</div>
</div>
@endsection()