<aside class="main-sidebar main-sidebar-custom bg-gradient-dark">
    <!-- Brand Logo -->
    <div class="brand-logo bg-gradient-gray-dark">
        <a href="" class="brand-link">
            <img src="{{ asset('asset/dist/img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle">
            <span class="brand-text font-weight-light" style="font-family: 'Nunito', sans-serif; color: #ffffff">CourierE<span style="color: red">x</span>press</span>
        </a>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- SidebarSearch Form -->
        <div class="form-inline mt-3 pb-3 mb-3 d-flex">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sm form-control-sidebar bg-dark border-0 rounded-0" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sm btn-sidebar btn-dark rounded-0">
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
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="nav-icon fa fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">COMPANY MANAGEMENT</li>
                <li class="nav-item">
                    <a href="{{ route('admin.company-master.view') }}" class="nav-link">
                        <i class="nav-icon fa fa-building"></i>
                        <p>
                            Company
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.branches.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-code-branch"></i>
                        <p>
                            Branch
                        </p>
                    </a>
                </li>
                <li class="nav-header">USER MANAGEMENT</li>
                <li class="nav-item">
                    <a href="{{ route('admin.roles.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-bars"></i>
                        <p>
                            Role
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

</aside>
