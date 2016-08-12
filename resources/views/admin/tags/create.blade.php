@extends('admin.plantilla.main')

@section('title', 'Agretar tag')

@section('contenido')
	<div class="panel panel-primary container">
		 <div class="panel-body">
	{!! Form::open(['route' => 'admin.tags.store', 'method' => 'POST'])!!}
	<div class="form-group">
	{!! Form::label('name' ,'Nombre') !!}
	{!! Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Nombre del tag'])!!}
	</div>
	<div class="form-group">
		{!! Form::submit('Registrar', ['class' =>'btn btn-primary'])!!}
	</div>
	{!! Form::close() !!}
	</div>
</div>

@endsection