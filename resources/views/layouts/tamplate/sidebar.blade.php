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
        <li class="active">
          <a href="/home">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Anggota</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/member/siswa"><i class="fa fa-circle-o"></i> Siswa</a></li>
            <li><a href="/member/guru"><i class="fa fa-circle-o"></i> Guru</a></li>
            <li><a href="/card"><i class="fa fa-circle-o"></i>Cetak Kartu Anggota</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> 
            <span>Buku</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/book"><i class="fa fa-circle-o"></i> Data Buku</a></li>
            <li><a href="/category"><i class="fa fa-circle-o"></i> Kategori</a></li>
          </ul>  
        </li>
        <li>
          <a href="/visitor">
            <i class="fa fa-child"></i>
            <span>Pengunjung</span>
          </a>
        </li>
        <li>
          <a href="/transaction">
            <i class="fa fa-newspaper-o"></i>
            <span>Peminjaman</span>
          </a>
        </li>
        @if(Auth::user()->role == 'Kepala Perpus')
        <li>
          <a href="/user">
            <i class="fa fa-user"></i>
            <span>Petugas</span>
          </a>
        </li>
        @endif
        <li class="header">LAPORAN</li>
        <li><a href="/transactionReport"><i class="fa fa-circle-o text-aqua"></i> <span>Laporan Peminjaman</span></a></li>
        <li><a href="/bookReport"><i class="fa fa-circle-o text-red"></i> <span>Laporan Buku</span></a></li>
        <li><a href="/memberReport"><i class="fa fa-circle-o text-yellow"></i> <span>Laporan Anggota</span></a></li>
        <li><a href="/visitorReport"><i class="fa fa-circle-o text-green"></i> <span>Laporan Pengunjung</span></a></li>   
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- =============================================== -->