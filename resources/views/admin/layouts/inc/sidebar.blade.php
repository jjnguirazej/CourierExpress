<aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="{{ asset('asset/dist/img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle">
        <span class="brand-text font-weight-bold" style="font-family: Verdana">CourierExpress</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- SidebarSearch Form -->
        <div class="form-inline mt-3 pb-3 mb-3 d-flex">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">COMPANY MANAGEMENT</li>
                <li class="nav-item">
                    <a href="{{ route('admin.company-master.view') }}" class="nav-link {{ Request::is('admin/company-master*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-building"></i>
                        <p>
                            Company Master
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link {{ Request::is('admin/branch-master*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-code-branch"></i>
                        <p>
                            Branch Master
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.branch-master.index') }}" class="nav-link {{ Request::is('admin/branch-master') ? 'active' : '' }}">
                                <i class="fa fa-wrench nav-icon"></i>
                                <p>Manage Branches</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.branch-master.create') }}" class="nav-link {{ Request::is('admin/branch-master/create') ? 'active' : '' }}">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Add New Branch</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

</aside>
