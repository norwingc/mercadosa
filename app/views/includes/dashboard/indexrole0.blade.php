@section('css')
    {{ HTML::style('plugins/morris/morris.css') }} 
	<!-- DataTables -->
    {{ HTML::style('plugins/datatables/dataTables.bootstrap.css') }}    
@stop

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Dashboard <small>Resume</small></h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Dashboard</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-lg-4 col-xs-12">
			<!-- small box -->
			<a href="{{ URL::to('Productos') }}">
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3>Productos: {{ Producto::all()->count() }}</h3>
						<p>Total de productos</p>
					</div>
					<div class="icon">
						<i class="fa fa-cubes"></i>
					</div>				
				</div>
			</a>
		</div>
		<div class="col-lg-4 col-xs-12">
			<!-- small box -->
			<a href="#">
				<div class="small-box bg-green">
					<div class="inner">
						<h3>Tiendas: 10</h3>
						<p>Total de tiendas</p>
					</div>
					<div class="icon">
						<i class="fa fa-shopping-cart"></i>
					</div>				
				</div>
			</a>	
		</div>
		<div class="col-lg-4 col-xs-12">			
			<!-- small box -->
			<a href="#">
				<div class="small-box bg-red">
					<div class="inner">
						<h3>Reportes</h3>
						<p>Galleria</p>
					</div>
					<div class="icon">
						<i class="fa fa-bar-chart"></i>
					</div>				
				</div>
			</a>	
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="box box-danger">
				<div class="box-header with-border">
					<h3 class="box-title">Resumen de productos</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>						
					</div>
				</div>
				<div class="box-body chart-responsive">
					<div class="chart" id="interview-resume" style="height: 300px;"></div>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
		<div class="col-md-6">
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title">Resumend de tiendas</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>						
					</div>
				</div>
				<div class="box-body chart-responsive">
					<div class="chart" id="calllog-resume" style="height: 300px;"></div>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
	</div>
</section>
<!-- /.content -->


@section('js')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<!-- DataTables -->
{{ HTML::script('plugins/datatables/jquery.dataTables.min.js') }}
{{ HTML::script('plugins/datatables/dataTables.bootstrap.min.js') }}
<script type="text/javascript">

$('#interview-resume').highcharts({
    title: {
        text: 'Productos',
        x: -20 //center
    },       
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'Total Productos'
        },
        plotLines: [{
            value: 0,
            width: 1,
            color: '#808080'
        }]
    },    
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle',
        borderWidth: 0
    },
    series: [{
        name: 'Productos',
        data: [10, 12, 20, 20, 30, 50, 50, 60]       
    }]
});

$('#calllog-resume').highcharts({
    title: {
        text: 'Tiendas',
        x: -20 //center
    },       
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'Tiendas'
        },
        plotLines: [{
            value: 0,
            width: 1,
            color: '#808080'
        }]
    },    
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle',
        borderWidth: 0
    },
    series: [{
        name: 'Tiendas',
        data: [10, 12, 10, 12, 8, 20, 18, 28]       
    }]
});
$('#example1').DataTable();
$('#example2').DataTable();

	
</script>
@stop