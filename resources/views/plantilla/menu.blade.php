<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-blue elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SMarket</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li id="liEscritorio" class="nav-item">
                    <a id="aEscritorio" href="/" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Escritorio</p>
                    </a>
                </li>
                <li id="liAlmacen" class="nav-item">
                    <a id="aAlmacen" href="#" class="nav-link">
                        <i class="nav-icon fa fa-table"></i>
                        <p>
                            Almacén
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a id="liInfraccion" href="{{ route('infracciones.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Infracciones</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-info-circle"></i>
                        <p>Acerca de</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
