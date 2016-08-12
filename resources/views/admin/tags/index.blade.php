@extends('admin.plantilla.main')

@section('title', 'listado de tags')

@section('contenido')
<a href="{{ route('admin.tags.create')}}" class="btn btn-primary">Registar nueva Categoria </a><hr>
<div class="panel panel-primary container">
		 <div class="panel-body">
		 <!--Un buscador de tags-->
		{!! Form::open(['route' =>'admin.tags.index', 'method' =>'GET', 'class' => 'navbar-form pull-right']) !!}
		<div class="input-group">
		{!! Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Buscar tag', 'aria-describedby' => 'search']) !!}
		<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
		</div>
		{!! Form::close() !!}
      <!--end buscador de tags-->
		
<table class="table table-striped">
<thead>
	<th>Id</th>
	<th>NOmbre</th>
	<th>Accion</th>
</thead>
<tbody>
	@foreach($tags as $tag)
	<tr>
		<td>{{ $tag->id }}</td>
		<td>{{ $tag->name}}</td>
		<td>
			<a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
			<a href="{{ route('admin.tags.destroy', $tag->id)}}" onclick="return confirm('Seguro que deseas eliminar')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>
					 				</a>
					 	
		</td>
	</tr>
	@endforeach
</tbody>

</table>
	<div class="text-center">
		{!! $tags->render()!!}
	</div>
</div>
</div>
@endsection