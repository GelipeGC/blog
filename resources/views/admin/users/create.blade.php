@extends('admin.plantilla.main')


@section('contenido')
	
	<div class="panel panel-primary container">
		 <div class="panel-body">
		 	
	{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}
		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', null,['class' =>'form-control', 'placeholder'=>'Nombre Compreto', 'rquiered'])!!}
			
		</div>
		<div class="form-group">
			{!! Form::label('email','Correo Electronico') !!}
			{!! Form::email('email', null,['class' =>'form-control', 'placeholder'=>'example@gmail.com', 'rquiered'])!!}
			
		</div>
		<div class="form-group">
			{!! Form::label('password','Contraseña') !!}
			{!! Form::password('password',['class' =>'form-control', 'placeholder'=> '******', 'requiered'])!!}
			
		</div>
		<div class="form-group">
			{!! Form::label('type','Tipo')!!}
			{!! Form::select('type',['member'=>'Miembro','admin'=>'Administrador'], null, ['class'=>'form-control', 'placeholder'=> 'Seleccione una Opcion', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
			
		</div>

	{!! Form::close() !!}
	</div>
  </div>
@endsection



