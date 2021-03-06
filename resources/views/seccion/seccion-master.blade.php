<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PC-VLC</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
  </head>
  <body>
  	<!--navbar-->
  	<nav class="navbar d-flex flex-row justify-content-between align-items-end">
  		<a href="/"><img src="{{asset('img/logo1.png')}}"></a>
  		<div>
	  		<ul class="list-inline">
	  			<li class="list-inline-item"><a href="/local">¿Dónde estamos?</a>&emsp;</li>
	  			<li class="list-inline-item"><a href="/navidad">Especial Navidad</a>&emsp;</li>
	  			<li class="list-inline-item"><a href="/ofertas">Ofertas</a>&emsp;</li>
	  		</ul>
  		</div>
  		<div>  			
  			<span><i class="fa fa-user"></i> <a data-toggle="modal" data-target="#myModal">Login</a></span>

			  <!-- The Modal -->
			  <div class="modal fade" id="myModal">
			    <div class="modal-dialog">
			      <div class="modal-content">
			      
			        <!-- Modal Header -->
			        <div class="modal-header">
			          <h4 class="modal-title">Login</h4>
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			        </div>
			        
			        <!-- Modal body -->
			        <div class="modal-body">
			          <form action="login" method="POST">
			          	{{ csrf_field() }} <!--Método anti-ataques Cross-site request forgery o falsificación de petición en sitios cruzados. Este método añadirá un campo oculto ya configurado con los valores necesarios.-->
			          	<label for='nombre'>Usuario:&nbsp;&nbsp;&nbsp; </label>
					    <input type="text" name="nombre" id="nombre" required></input><br>
					    <label for='pass'>Password: </label>
					    <input type="text" name="pass" id="pass" required></input><br>
					    <button class="btn btn-sm btn-primary" type="submit">Login</button>
					    <span><a href="registro">¡Regístrate!</a></span>
					  </form>
			        </div>

			      </div>
			    </div>
			  </div>
			 
  			<span><i class="fa fa-shopping-cart"></i> <a href="/carrito">Carrito</a></span>
  		</div>
	</nav>
	<!--end navbar-->

	<!--sidebar-->
	<div class="wrapper container-fluid">
		<div class="row">
			<aside class="col-2">
				<div class="list-group">
				  <a href="/componentes" class="list-group-item list-group-item-action">Componentes</a>
				  <a href="/ordenadores" class="list-group-item list-group-item-action">Ordenadores</a>
				  <a href="/smartdevices" class="list-group-item list-group-item-action">SmartDevices</a>
				  <a href="/perifericos" class="list-group-item list-group-item-action">Periféricos</a>
				  <a href="/audiofotovideo" class="list-group-item list-group-item-action">Audio/Foto/Vídeo</a>
				  <a href="/televisores" class="list-group-item list-group-item-action">Televisores</a>
				  <a href="/consolas" class="list-group-item list-group-item-action">Consolas</a>
				  <a href="/impresoras" class="list-group-item list-group-item-action">Impresoras</a>
				</div>
			</aside>
			<!--contenido-->
			<div class="col-10 content bg-faded">

				<div class="text-muted text-center mt-3">
					<div class="row d-flex justify-content-between">
						<h1 class="pl-3">{{ucFirst($title)}}</h1><!-- ucFirst() - función php que pone la primera letra en mayúscula -->			
						<div class="pr-5"> 
							<form method="get">
								<select class="custom-select" name="selector" id="selector">
									<option value="todo">Filtrar por...</option>	
									@foreach($tipos as $key)
										<option>{{$key->tipo}}</option>
									@endforeach									
									<input type="submit" name="actualizar" value="Actualizar" class="btn btn-sm btn-outline-info ml-2">				
								</select>	
							</form>
						</div>		
					</div>
					<hr>
					
					@yield('content')

				</div>
										
			</div>
			<!--end contenido-->

		</div>
	</div>
	<!--end sidebar-->

	<!--footer-->
	<footer class="footer col-12 fixed-bottom bg-faded">
	    <div class="container my-2 text-center">
	      <span class="text-muted small">Copyright&copy;2017 - Quique Ribera&emsp;&emsp;
	      	<a href="#"><i class="fa fa-twitter">&emsp;</i></a>
	      	<a href="#"><i class="fa fa-facebook">&emsp;</i></a>
	      	<a href="#"><i class="fa fa-instagram">&emsp;</i></a>
	      </span>
	    </div>
	</footer>
	<!--end footer-->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>