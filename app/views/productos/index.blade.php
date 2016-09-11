@extends('templates.maintemplate')

@section('css')
<!-- DataTables -->
{{ HTML::style('plugins/datatables/dataTables.bootstrap.css') }}    
@stop

@section('contenido')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Lista de Productos</h1>
	<ol class="breadcrumb">
		<li><a href="{{ URL::to('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>	
		<li class="active">Producto</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">	
	<div class="box box-info">
		<div class="box-header">
			<h3 class="box-title">Lista de Productos</h3>
		</div>

		@if(Session::has('message'))
			<div class="callout callout-info col-sm-12">
				<h4>Info</h4>
				<p>{{ Session::get('message') }}</p>
			</div>			
		@endif	

		{{ HTML::ul($errors->all(), array('class' =>'bg-danger')) }}			
	
		<div class="box-body">	
			<div class="table-responsive">
				<table class="table table-bordered table-striped dataTable" id="example1">
					<thead>
		                <tr>
							<th>Imagen</th>
							<th>Codigo de Tienda</th>
							<th>Ubicacion</th>
							<th>Contacto</th>
		                </tr>
	                </thead>
	                <tbody>
	                	@foreach($productos as $value)
							<tr>
								<td><img src="{{ asset('img/'.$value->path) }}" class="img-responsive" style="width:200px; margin:auto"></td>
								<td>{{ $value->codigo }}</td>
								<td>{{ $value->ubicacion }}</td>
								<td>{{ $value->contacto }}</td>
							</tr>
						@endforeach
	                </tbody>
				</table>
			</div>
		</div>
	</div>
</section>		
@stop

@section('js')
<!-- DataTables -->
{{ HTML::script('plugins/datatables/jquery.dataTables.min.js') }}     
{{ HTML::script('plugins/datatables/dataTables.bootstrap.min.js') }}

<script type="text/javascript">
	$("#example1").DataTable();
</script>
@stop