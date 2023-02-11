<header class="main-header">
    

         <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>

            <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('dashboard')}}" class="nav-link">Home</a>
            </li>
      
            <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
            </li>
     
        </ul>
        
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
      
            <!-- Navbar Search -->
            <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
            </a>
                    <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                        </button>
                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                        <i class="fas fa-times"></i>
                        </button>
                    </div>
                    </div>
                </form>
                    </div>
            </li>

            <!-- Notifications Dropdown Menu
            <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">3 Notifications</span>
            <div class="dropdown-divider"></div>

            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i>  belum dikembalikan
            </a>
            <a href="#" class="dropdown-item">
             <i class="fas fa-envelope mr-2"></i>  sudah dikembalikan
            </a>

            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
            </li> -->

            <!-- fullscreen -->
            <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
            </a>
            </li>

            <!-- Navbar logout -->
            <li class="nav-item dropdown user user-menu">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <img src="{{ url(auth()->user()->foto ?? '') }}" class="user-image img-profil"
                            alt="User Image">
                        <span class="hidden-xs">{{ auth()->user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ url(auth()->user()->foto ?? '') }}" class="img-circle img-profil"
                                alt="User Image">
                            <p>
                                {{ auth()->user()->name }} - {{ auth()->user()->email }}
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer d-flex">
                            <div class="pull-left mr-4">
                                <a href="{{ route('user.profil') }}" class="btn btn-default btn-flat">Profil</a>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-default btn-flat"
                                    onclick="$('#logout-form').submit()">Keluar</a>
                            </div>
                        </li>
                    </ul>
            </li>

        </ul>
    </nav>
</header>
<form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
    @csrf
</form>