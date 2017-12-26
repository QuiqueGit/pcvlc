@extends('master')

@section('content')
	<!--carousel, tamaño del banner 1600x300 aprox.-->
	<div id="demo" class="carousel slide" data-ride="carousel">

	  <!-- Indicators -->
	  <ul class="carousel-indicators">
	    <li data-target="#demo" data-slide-to="0" class="active"></li>
	    <li data-target="#demo" data-slide-to="1"></li>
	    <li data-target="#demo" data-slide-to="2"></li>
	  </ul>

	  <!-- The slideshow -->
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="img/banner1.jpg" alt="banner1">
	    </div>
	    <div class="carousel-item">
	      <img src="img/banner2.jpg" alt="banner2">
	    </div>
	    <div class="carousel-item">
	      <img src="img/banner3.jpg" alt="banner3">
	    </div>
	  </div>

	  <!-- Left and right controls -->
	  <a class="carousel-control-prev" href="#demo" data-slide="prev">
	    <span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#demo" data-slide="next">
	    <span class="carousel-control-next-icon"></span>
	  </a>

	</div>
	<!--end carousel-->

	<!--Novedades de la semana-->
	<div class="text-muted text-center mt-3">
		<h1>Novedades de la semana</h1>
		<hr>
		<div class="row d-flex mb-5 p-2">

			@foreach($novedades as $key)
				<div class="card col-3 my-2">
				  <a href="producto/{{$key->nombre}}-{{$key->marca}}"><img class="card-img-top container mt-3" src="img/{{$key->foto}}" alt="Card image cap" style="height: 250px;"></a>
				  <div class="card-block">
				    <h4 class="card-title">{{$key->nombre}} {{$key->marca}}</h4>
				    <p class="card-text"><b>{{$key->precio}}€</b></p>		    
				  </div>
				</div>			
			@endforeach
		</div>		
	</div>
	<!--end Novedades-->

@endsection