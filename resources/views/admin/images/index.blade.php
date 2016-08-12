@extends('admin.plantilla.main')

@section('title','Galeria de Imagenes')

@section('contenido')
<div class="panel panel-primary container">
	<div class="panel-body">
	<div class="row">
		@foreach($images as $image)
		<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-body">
				<img src="/images/articles/{{ $image->name}}" class="img-responsive">
			</div>
			<div class="panel-footer">{{$image->article->title}}</div>
		</div>
			
		</div>

		@endforeach
	</div>
	</div>
</div>
@endsection