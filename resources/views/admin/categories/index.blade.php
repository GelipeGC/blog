@extends('admin.plantilla.main')
@section('title', 'Listado categoria')
@section('contenido')
<a href="{{route('admin.categories.create') }}" class="btn btn-info" >Registrar nueva Categoria</a>
<div class="panel panel-primary container">
	<div class="panel-body">
		<table class="table table-striped">
			<thead>
				<th>ID</th>
				<th>Nombre</th>
				<th>Accion</th>
			</thead>
			<tbody>
				@foreach($categories as $category)
				<tr>
					<td>{{ $category->id }}</td>
					<td>{{ $category->name}}</td>
					<td>
						<a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
						<a href="{{ route('admin.categories.destroy', $category->id )}}" onclick="return confirm('Seguro que deseas eliminar')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>
					 				</a>
					 	
					 </td>
				</tr>
				@endforeach
			</tbody>	
		</table>
		<div class="text-center">
		{!! $categories->render() !!}
			
		</div>
		
	</div>
</div>
@endsection