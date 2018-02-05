<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-with, initial-scale=1.0,width=340"/>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

		<title>@yield('title')</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
				 
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

		<link rel="stylesheet" href="{{URL::to('public/css/productDetail.css')}}">
		<script src="{{URL::to('public/js/productDetail.js')}}"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
				<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
			
    </head>
    <body>              
    	
    	<div class="container">
		    <div class="row">
		        <nav class="navbar navbar-default">
		            <div class="container-fluid">
		                <ul class="nav navbar-nav navbar-right">
		                    @if(Session::has('shoppingCard'))
		                    <li class="dropdown">
		                      <a href="#"><i class="fas fa-shopping-cart"></i> Sepetim <span class="badge">5</span></a>
		                    </li>
		                     @else
		                    <li><a href="#"><i class="fas fa-shopping-cart"></i> Sepetim <span class="badge">0</span></a></li>
		                     @endif
		                </ul>
		                    
		            </div>
		        </nav>
		    </div>
		</div>
    	
        @yield('content')
       
    </body>
</html>
