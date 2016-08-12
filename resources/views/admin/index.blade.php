@extends('admin.plantilla.main')

@section('title', 'Bienvenido al panel de Administracion')
@section('contenido')
<h3>BIENVENIDOS</h3>
<li><a href="{{url('admin/users/profile')}}">Cambiar mi imagen de perfil</a></li>


<a href="{{route('admin.articles.create') }}" class="btn btn-info" >Crear un Nuevo Articulo</a>
<a href="{{route('admin.articles.create') }}" class="btn btn-info" >Crear una Nueva Categoria</a>

@endsection