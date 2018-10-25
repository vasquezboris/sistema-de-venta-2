@extends('plantilla')

@section('contenido')

	<div class="row">
		<div class="col-lg-8 col-md-8 col-xs-12">
	<h3>Listado de Categoria
		<a href="almacen/create"><button class="btn btn-success">Nuevo</button></a>
	</h3>

		@include('almacen.search')
		</div>
	</div>
	@foreach($categorias as $categoria)
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-resposive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Id</th>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Opciones</th>
					</thead>
					
					
					
				</table>
			</div>
			
		</div>
	</div>
	@endforeach
 
@endsection