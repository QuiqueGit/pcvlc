@extends('seccion.seccion-master')

@section('content')

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

@endsection