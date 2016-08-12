@extends('admin.plantilla.main')

@section('contenido')
<a href="{{ route('admin.users.create')}}" class="btn btn-primary">Registar Nuevo Usuario </a><hr>
<div class="panel panel-primary container">
	<div class="panel-body">
		<table class="table table-striped">
		 	<thead>
		 						
		 		<th>ID</th>
		 		<th>Nombre</th>
		 		<th>Correo</th>
		 		<th>Tipo</th>
		 		<th>Accion</th>
		 					
		 	</thead>
		 	<tbody>
		 		@foreach($users as $user)
		 			<tr>
		 				<td>{{$user->id}}</td>
		 				<td>{{$user->name }}</td>
		 				<td>{{$user->email }}</td>
		 				<td>
		 				@if($user->type =="admin")
		 				<span class="label label-danger">{{$user->type}}</span>

		 				@else
		 				<span class="label label-primary">{{$user->type}}</span>
		 				@endif
		 				</td>
		 				<td><a href="{{ route('admin.users.destroy', $user->id)}}" onclick="return confirm('Seguro que deseas eliminar')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>
		 				</a><a href="{{ route('admin.users.edit', $user->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a></td>
		 			</tr>
		 		@endforeach
		 						
		 	</tbody>
		 </table>
		 {!! $users->render()!!}
	</div>
</div>

@endsection