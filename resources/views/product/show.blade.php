@extends('layout')
@section('title','Ürünler')

@section('content')
	<div class="container">
		<div class="row">

					<div class="col-xs-4 item-photo">
	                    <img style="max-width:100%;" src="{{$product->image}}" />
	                </div>

	                <div class="col-xs-5" style="border:0px solid gray">
	                    
	                    <h3>{{$product->name}}</h3>    
	                    <h5 >Marka: <a href="#">{{$product->brandName}}</a></h5>
	        
	                    <h6 class="title-price"><small>Fiyat</small></h6>
	                    <h3 style="margin-top:0px;">{{$product->price}}</h3>
	          
	                    <div class="section" style="padding-bottom:20px;">
	                        <h6 class="title-attr"><small>Miktar</small></h6>                    
	                        <div>
	                            <input value="1" />
	                        </div>
	                    </div>                
	        
	                    <div class="section" style="padding-bottom:20px;">
	                        <button class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Sepete Ekle</button>
	                    </div>                                        
	                </div>                              
	        
	                <div class="col-xs-9">
	                    <h4>Ürün Detayı</h4>
	                    <div style="width:100%;border-top:1px solid silver">
	                        <p style="padding:15px;">
	                            <small>
	                            {{$product->description}}
	                            </small>
	                        </p>
	                        
	                    </div>
	                </div>	
			
		</div>
	</div>
@endsection()