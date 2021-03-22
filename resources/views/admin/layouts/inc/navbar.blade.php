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
            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <i class="far fa-user mr-2"></i> PROFILE
                </a>
                <a href="{{ route('logout') }}" class="dropdown-item text-danger"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                >
                    <i class="fas fa-power-off mr-2"></i> LOGOUT
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
