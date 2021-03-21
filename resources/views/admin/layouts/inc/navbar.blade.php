<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <div class="image" style="margin-top:-7px;">
                    <span>{{ Auth::user()->name }}</span>
                    <img src="{{ asset('asset/dist/img/admin.png') }}" class="img-circle" alt="User Image" width="40" height="40">
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-user mr-2"></i> PROFILE
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-power-off mr-2"></i> LOGOUT
                </a>
            </div>
        </li>
    </ul>
</nav>
