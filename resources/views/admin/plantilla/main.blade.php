<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Default') | Panel de administracion</title>
	<link rel="stylesheet"  href="{{ asset('css/style.css')}}">
	<link rel="stylesheet"  href="{{ asset('plugin/bootstrap/css/bootstrap.css')}}">
	<!--Estilos de la pagina-->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
	<link rel="stylesheet" type="text/css" href="css/bootpstrap.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugin/choosen/chosen.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugin/trumbowyg/ui/trumbowyg.css') }}">
	<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	

</head>
<body>
	@include('admin.plantilla.partes.nav')
	<section class="section-admin">
		<div class="panel panel-default">
		<div class="panel-heading">
		<h1 class="panel-title">@yield('title')</h1>
		</div>
		<div class="panel-body">
			@include('flash::message')
			
			@yield('contenido')
		
			@include('admin.plantilla.partes.errors')
		</div>
		</div>
		<!-- Pie de pagina -->
	</section>
	<script src="{{ asset('plugin/jquery/js/jquery-2.2.0.js')}}"></script>
	<script src="{{ asset('plugin/choosen/chosen.jquery.js') }}"></script>
	<script src="{{ asset('plugin/bootstrap/js/bootstrap.js')}}"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="{{asset('plugin/trumbowyg/trumbowyg.js') }}"></script>
	@yield('js')
</body>
</html>