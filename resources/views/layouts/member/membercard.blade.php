@extends('layouts.tamplate.master')
@section('title','Laporan Transaction')

@section('content')
<!-- Isi File siswa.php-->
<div class="content-wrapper">
  <!-- content header -->
  <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-8">
          <section class="content-header">
              <h1>Cetak Kartu Anggota</h1>
          </section>
      </div>
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <!-- box -->
        <div class="box">
          <div class="box-header"> 
          <div class="col-lg-2">
              <a href="" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-download"></i>&nbsp; Export Kartu Anggota</a>
          </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
          @if (session('success'))
            <div class="alert alert-success" role="alert">
            {{ session('success') }}
            </div>
          @endif
          @if (session('update'))
            <div class="alert alert-info" role="alert">
            {{ session('update') }}
            </div>
          @endif
          @if (session('delete'))
          <div class="alert alert-danger" role="alert">
          {{ session('delete') }}
          </div>
          @endif
            <div class="table-responsive" style="overflow: auto">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kartu Member</th>
                    <th>Peraturan</th>
                    <th>Cetak</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td>1</td>
                      <td>Kartu Member</td>
                      <td>
                          1. Kartu harus dibawa saat meninjam / mengembalikan buku </br>
                          2. Wajib merawat dan menjaga kebersihan buku dengan baik </br>
                          3. Buku hilang dan rusak menjadi tanggungjawab peminjam </br>
                          4. Jangka waktu maksimal 7 hari </br>
                          5. Terlambat mengembalikan buku dikenai sanksi / denda </br>
                          6. Bila kartu hilang, segera menhubungi petugas perpustakaan </br>
                      </td>
                      <td>
                          <button class="btn btn-success btn-xs"><i class="fa fa-print"></i> &nbsp;Cetak</button>
                      </td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Kartu Member</th>
                    <th>Peraturan</th>
                    <th>Cetak</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.table responsive -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection