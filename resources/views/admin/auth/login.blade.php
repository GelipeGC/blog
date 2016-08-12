@extends('admin.plantilla.main')

@section('title', 'Login')
@section('contenido')
	{!! Form::open(['route' => 'admin.auth.login', 'method' => 'POST']) !!}
		<div class="form-group">
		{!! Form::label('email', 'correo Electronico') !!}
		{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@example.com']) !!}
		</div>
		<div class="form-group">
		{!! Form::label('password', 'Contraseña') !!}
		{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '*******************']) !!}
		</div>
		<div class="form-group">
		{!! Form::submit('Acceder', ['class' => 'btn btn-primary']) !!}
			
		</div>
	

	{!! Form::close() !!}

@endsection