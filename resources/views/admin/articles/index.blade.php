@extends('admin.plantilla.main')

@section('title', 'Listado de categorias')

@section('contenido')
<a href="{{route('admin.articles.create') }}" class="btn btn-info" >Registrar nueva Articulo</a>

<div class="panel panel-primary container">
	<div class="panel-body">
	<!--Un buscador de tags-->
		{!! Form::open(['route' =>'admin.articles.index', 'method' =>'GET', 'class' => 'navbar-form pull-right']) !!}
		<div class="input-group">
		{!! Form::text('title',null,['class' => 'form-control', 'placeholder' => 'Buscar Articulo', 'aria-describedby' => 'search']) !!}
		<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
		</div>
		{!! Form::close() !!}
      <!--end buscador de tags-->
		<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Titulo</th>
			<th>Categoria</th>
			<th>User</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($articles as $article)
			<tr>
				<td>{{$article->id }}</td>
				<td>{{ $article->title}}</td>
				<td>{{ $article->category->name}}</td>
				<td>{{ $article->user->name }}</td>
				<td>
					<a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
					<a href="{{ route('admin.articles.destroy', $article->id )}}" onclick="return confirm('Seguro que deseas eliminar')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
			
				</td>
			</tr>
			@endforeach
		</tbody>
			
		</table>
		<div class="text-center">
			{!! $articles->render() !!}
		</div>
	</div>
</div>
@endsection