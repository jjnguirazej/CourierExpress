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
                <li class="nav-item">
                    <a href="{{ route('admin.company-master.view') }}" class="nav-link">
                        <i class="nav-icon fa fa-building"></i>
                        <p>
                            Company
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-code-branch"></i>
                        <p>
                            Branch
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.branch-master.create') }}" class="nav-link">
                                <i class="fa fa-plus nav-icon ml-4"></i>
                                <p>Create New Branch</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.branch-master.index') }}" class="nav-link">
                                <i class="fa fa-wrench nav-icon ml-4"></i>
                                <p>Manage Branches</p>
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
