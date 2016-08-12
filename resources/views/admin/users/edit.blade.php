@extends('admin.plantilla.main')

@section('title', 'Editar usuario ' . $user->name)
@section('contenido')
	<div class="panel panel-primary container">
		 <div class="panel-body">

	{!! Form::open(['route' => ['admin.users.update', $user], 'method' => 'PUT']) !!}
		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', $user->name,['class' =>'form-control', 'placeholder'=>'Nombre Compreto', 'rquiered'])!!}
			
		</div>
		<div class="form-group">
			{!! Form::label('email','Correo Electronico') !!}
			{!! Form::email('email', $user->email,['class' =>'form-control', 'placeholder'=>'example@gmail.com', 'rquiered'])!!}
			
		</div>
		
		<div class="form-group">
			{!! Form::label('type','Tipo')!!}
			{!! Form::select('type',['member'=>'Miembro','admin'=>'Administrador'], $user->type, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Editar', ['class'=>'btn btn-primary']) !!}
			
		</div>

	{!! Form::close() !!}
	</div>
  </div>
@endsection



