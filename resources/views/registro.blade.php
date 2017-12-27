@extends('master')

@section('content')

<div class="col-3 container mt-5 text-muted">

	<h1 class="text-muted">Nuevo Usuario</h1>
	<hr>
		
	<form action="" method="post">

		{{ csrf_field() }}
		<table>
			<tr>
				<td><label for='nombre'>Nombre:</label></td>
				<td><input type="text" name="nombre" id="nombre" required></td>
			</tr>
			<tr>			
				<td><label for="pass">Password:</label></td>
				<td><input type="text" name="pass" id="pass" required></td>				
			</tr>
			<tr>
				<td><label for="pass">email:</label></td>
				<td><input type="email" name="email" id="email" required></td>
			</tr>			
		</table>
		<hr>
		<button type="submit" class="btn btn-outline-primary btn-block">Registrar</button>
		
	</form>

</div>

@endsection