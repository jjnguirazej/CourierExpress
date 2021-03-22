<nav class="main-header navbar navbar-expand bg-gradient-gray-dark navbar-light sticky-top">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="font-size: 1.3rem; color: lightgreen; margin-top: -8px;"><i class="ion-ios-toggle-outline"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <div class="image" style="margin-top:-6px; color: #ffffff;">
                    <span class="ml-2">{{ Auth::user()->name }}</span>
                    <img src="{{ asset('asset/dist/img/admin.png') }}" class="img-circle" alt="User Image" width="35" height="35">
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <i class="fa fa-user mr-2"></i> PROFILE
                </a>
                <a href="{{ route('logout') }}" class="dropdown-item text-danger"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                >
                    <i class="fa fa-power-off mr-2"></i> LOGOUT
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
