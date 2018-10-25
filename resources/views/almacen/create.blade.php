@extends('plantilla')

@section('contenido')

	<div class="row">
		<div class="col-lg-6 col.md-6 col-sm-6 col-xs-12 ">
			<h3>Nueva Categoria</h3>
			<div class="alert-alert-danger">
				<ul>

					<li></li>
				</ul>
			</div>
			
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" placeholder="Nombre...">
			</div>

			<div class="form-group">
				<label for="descripcion">Descripcion</label>
				<input type="text" name="descripcion" class="form-control" placeholder="Descripcion...">
			</div>

			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>

		</div>
	</div>

@endsection