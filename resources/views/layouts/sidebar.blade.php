<!-- Left side column. contains the logo and sidebar -->
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">      
    <!-- Brand Logo -->
    <a href="{{ url('dashboard')}}" class="brand-link">
                @php
                    $words = explode(' ', $setting->nama_perusahaan);
                    $word  = '';
                    foreach ($words as $w) {
                        $word .= $w[0];
                    }
                @endphp
      <img src="{{ url($setting->path_logo) }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ $setting->nama_perusahaan }}</span>
    </a>
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="{{ url(auth()->user()->foto ?? '') }}" class="img-circle user-image img-profil">
        </div>
        <div class="info">
          <a class="d-block">{{ auth()->user()->name; }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
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
      <nav>
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-store-alt"></i>
              <p>
                Menu Utama
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('kategori.index') }}" class="nav-link {{ request()->is('kategori') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('produk.index') }}" class="nav-link {{ request()->is('produk') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Produk</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('member.index') }}" class="nav-link {{ request()->is('member') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Member</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('supplier.index') }}" class="nav-link {{ request()->is('supplier') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supplier</p>
                </a>
              </li>
          </li>

        </ul>
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-money-bill"></i>
                <p>
                Menu Transaksi
                <i class="right fas fa-angle-left"></i>
                </p>
                </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('pengeluaran.index') }}" class="nav-link {{ request()->is('pengeluaran') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengeluaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('pembelian.index') }}" class="nav-link {{ request()->is('pembelian') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembelian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('penjualan.index') }}" class="nav-link {{ request()->is('penjualan') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('transaksi.index') }}" class="nav-link {{ request()->is('transaksi') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transaksi Aktif</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('transaksi.baru') }}" class="nav-link {{ request()->is('transaksi') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transaksi Baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('laporan.index') }}" class="nav-link {{ request()->is('laporan') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan</p>
                </a>
              </li>
            </li>
        </ul>

        <li class="nav-item">
            <a href="{{ route('user.index') }}" class="nav-link {{ request()->is('user') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                USER
                <span class="right badge badge-danger">system</span>
              </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route("setting.index") }}" class="nav-link {{ request()->is('setting') ? 'active' : '' }}">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                PENGATURAN
                <span class="right badge badge-danger">system</span>
              </p>
            </a>
        </li>

    </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>