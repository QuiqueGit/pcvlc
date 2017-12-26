@extends('master')

@section('content')

	<div class="text-muted text-center mt-3">
		<div class="row d-flex justify-content-between">
			<h1 class="pl-3">Componentes de ordenador</h1>			
			<div class="pr-5"> 
				<form action="componentes" method="get">
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
		<div class="row d-flex mb-5 p-2">

			@foreach($componentes as $key)
				<div class="card col-3 my-2">
				  <a href="componentes/{{$key->id}}"><img class="card-img-top container mt-3" src="img/{{$key->foto}}" alt="Card image cap" style="height: 215px;"></a>
				  <div class="card-block">
				    <h4 class="card-title">{{$key->nombre}} {{$key->modelo}}</h4>
				    <p>{{$key->tipo}}</p>
				    <p>Unidades: {{$key->unidades}}</p>
				    <p class="card-text"><b>{{$key->precio}}€</b></p>		
				    <button type="button" class="btn btn-sm btn-outline-info" name="add"><i class="fa fa-shopping-cart"></i> Añadir</button>
				  </div>
				</div>			
			@endforeach
		</div>		
	</div>

@endsection