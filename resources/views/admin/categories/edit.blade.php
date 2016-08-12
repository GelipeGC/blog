@extends('admin.plantilla.main')

@section('title', 'editar usuario '.$category->name)

@section('contenido')
<div class="panel panel-primary container">
	<div class="panel-body">
	{!! Form::open(['route' => ['admin.categories.update', $category], 'method' =>'PUT']) !!}
	 	<div class="form-group">
				{!! Form::label('name','Nombre') !!}
				{!! Form::text('name', $category->name ,['class' =>'form-control', 'placeholder'=>'Nombre de la Categoria', 'requiered'])!!}
				
			</div>
	 	<div class="form-group">
				{!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
				
		</div>

	 {!! Form::close() !!}
	 
	</div>
</div>


@endsection