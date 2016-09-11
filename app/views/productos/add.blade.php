@extends('templates.maintemplate')

@section('contenido')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Agregar Productos</h1>
	<ol class="breadcrumb">
		<li><a href="{{ URL::to('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ URL::to('Productos') }}">Productos</a></li>
		<li class="active">Agregar Producto</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">	
	<div class="box box-info">
		<div class="box-header">
			<h3 class="box-title">Datos del Producto</h3>
		</div>

		@if(Session::has('message'))
			<div class="callout callout-info col-sm-12">
				<h4>Info</h4>
				<p>{{ Session::get('message') }}</p>
			</div>			
		@endif	


		{{ HTML::ul($errors->all(), array('class' =>'bg-danger')) }}			
	
		<div class="box-body">	
			{{ Form::open(array('url' => 'Productos/Add', 'class' => 'form-horizontal', 'files' => 'true')) }}
				<div class="col-sm-6">					
					<div class="form-group">
						<label class="col-sm-3">Imagen</label>
						<div class="col-sm-9">
							<input type="file" class="form-control" required name="path">
						</div>
					</div>
				</div>	
				<div class="col-sm-12">					
					<div class="form-group">
						<label class="col-sm-3">Codigo de Tienda</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" required name="codigo">
						</div>
					</div>
				</div>	
				<div class="col-sm-12">					
					<div class="form-group">
						<label class="col-sm-3">Ubicacion</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" required name="ubicacion">
						</div>
					</div>
				</div>	
				<div class="col-sm-12">					
					<div class="form-group">
						<label class="col-sm-3">Contacto</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" required name="contacto">
						</div>
					</div>
				</div>	
				<div class="text-center col-md-12">
					<button type="submit" class="btn btn-success">Guardar</button>
				</div>
			{{ Form::close() }}		
		</div>
	</div>	
</section>
@stop