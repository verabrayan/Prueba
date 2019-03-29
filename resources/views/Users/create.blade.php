@extends('layouts.app')

@section('title','Registro de Usuario')

@section('content')
	<form class="form-group" method="POST" action="/Users">
		{{csrf_field()}}
		<div class="form-group">
			<label for="Nombre">Nombre:</label>
			<input type="text" name="Nombre" class="form-control"placeholder="Nombre">
			<label for="Apellido">Apellido:</label>
			<input type="text" name="Apellido" class="form-control"placeholder="Apellido">
			<label for="Edad">Edad:</label>
			<input type="text" name="Edad" class="form-control"placeholder="Edad">
			<label for="Correo">Correo Electronico:</label>
			<input type="text" name="Correo" class="form-control"placeholder="Correo Electronico">
			<label for="Contraseña">Contraseña</label>
   			<input type="password" class="form-control" id="Contraseña" placeholder="Contraseña">
  
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>

@endsection

