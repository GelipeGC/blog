@extends('admin.plantilla.main')

@section('title', 'editar Tag ')
@section('contenido')
<div class="panel panel-primary container">
	<div class="panel-body">
	{!! Form::open(['route' => ['admin.tags.update', $tags], 'method' =>'PUT']) !!}
	 	<div class="form-group">
				{!! Form::label('name','Nombre') !!}
				{!! Form::text('name', $tags->name ,['class' =>'form-control', 'placeholder'=>'Nombre de la Categoria', 'requiered'])!!}
				
			</div>
	 	<div class="form-group">
				{!! Form::submit('Editar', ['class'=>'btn btn-primary']) !!}
				
		</div>

	 {!! Form::close() !!}
	 
	</div>
</div>

@endsection