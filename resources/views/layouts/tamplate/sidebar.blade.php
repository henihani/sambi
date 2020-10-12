<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('assets/dist/img/tutwurihandayani.png') }}" class="img-circle" alt="Logo">
        </div>
        <div class="pull-left info">
          <p>SMK Negeri 1 Sambi</p>
          <a href="/home"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Administrasi</li>
        <li class="{{ setActive(['/', 'home']) }}">
          <a href="/home">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="{{ setActive(['member/siswa*', 'member/guru*', 'card*']) }} treeview">
          <a href="#">
            <i class="fa fa-user-plus"></i>
            <span>Anggota</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="{{ setShow(['member/siswa*', 'member/guru*', 'card*']) }} treeview-menu">
            <li><a class="nav-link {{ setActive(['member/siswa*']) }} " href="/member/siswa"><i class="fa fa-circle-o"></i> Siswa</a></li>
            <li><a class="{{ setActive(['member/guru*']) }}" href="/member/guru"><i class="fa fa-circle-o"></i> Guru</a></li>
            <li><a class="{{ setActive(['card*']) }}" href="/card"><i class="fa fa-circle-o"></i>Cetak Kartu Anggota</a></li>
          </ul>
        </li>
        <li class="{{ setActive(['book*', 'category*']) }} treeview">
          <a href="#">
            <i class="fa fa-book"></i> 
            <span>Buku</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="{{ setShow(['book*', 'category*']) }} treeview-menu">
            <li><a class="{{ setActive(['book*']) }}" href="/book"><i class="fa fa-circle-o"></i> Data Buku</a></li>
            <li><a href="/category"><i class="fa fa-circle-o"></i> Kategori</a></li>
          </ul>  
        </li>
        <li class="{{ setActive(['visitor*']) }}">
          <a href="/visitor">
            <i class="fa fa-users"></i>
            <span>Pengunjung</span>
          </a>
        </li>
        <li class="{{ setActive(['transaction*']) }}">
          <a href="/transaction">
            <i class="fa fa-bar-chart"></i>
            <span>Peminjaman</span>
          </a>
        </li>
        @if(Auth::user()->role == 'Kepala Perpus')
        <li class="{{ setActive(['user*']) }}">
          <a href="/user">
            <i class="fa fa-user"></i>
            <span>Petugas</span>
          </a>
        </li>
        @endif
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="{{ setShow(['transactionReport*', 'bookReport*', 'memberReport*', 'visitorReport*']) }} treeview-menu">
            <li><a href="/transactionReport"><i class="fa fa-circle-o"></i> Peminjaman</a></li>
            <li><a href="/bookReport"><i class="fa fa-circle-o"></i> Buku</a></li>
            <li><a href="/memberReport"><i class="fa fa-circle-o"></i> Anggota</a></li>
            <li><a href="/visitorReport"><i class="fa fa-circle-o"></i> Pengunjung</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- =============================================== -->