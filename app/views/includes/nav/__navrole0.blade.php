<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{asset('img/avatar04.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>Mercadosa Admin</p>                       
        </div>
    </div>
    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Codigo de producto">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="{{ URl::to('/') }}"><i class="fa fa-home"></i><span>Home</span></a></li>        
        <li class="treeview">
            <a href="#"><i class="fa fa-shopping-cart"></i> <span>Tiendas</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="#">Ver</a></li>
                <li><a href="#">Agregar</a></li>                
            </ul>
        </li>
        <li class="treeview">
            <a href="#"><i class="fa fa-cube"></i> <span>Productos</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="#">Ver</a></li>
                <li><a href="{{ URL::to('Productos/Add') }}">Agregar</a></li>               
            </ul>
        </li>       
        <li class="treeview">
            <a href="#"><i class="fa fa-bar-chart"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="#">Galeria</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Tiendas</a></li>               
            </ul>
        </li>       
    </ul>
    <!-- /.sidebar-menu -->
</section>