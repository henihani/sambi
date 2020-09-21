@extends('layouts.tamplate.master')
@section('title','show member')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <section class="content-header">
        <h1>Edit Data Anggota</h1>
      </section>
    </div>
  </div>
    <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Detail kunjungan perpustakaan</h3>
          </div>
          <!-- form start -->
          <form>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Tanggal</label>
                    <input type="text" class="form-control" name="nomor_anggota" value="{{ $visitors->tanggal_kunjungan }}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Nomor Identitas</label>
                    <input type="text" class="form-control" name="nama" value="{{ $visitors->members->nomor_identitas}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nomor_identitas" value="{{ $visitors->members->nama}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" class="form-control" name="jurusan" value="{{ $visitors->members->jurusan_gurumapel}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" class="form-control" name="kelas" value="{{ $visitors->members->kelas}}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="foto">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" value="{{ $visitors->members->jabatan}}" disabled>
                  </div>  
                </div>
              </div>
                  <!-- /.row -->
            </div>
                <!-- /.box-body -->
            <div class="box-footer">
              <div class="row">
                <div class="col-md-5"></div>
                <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
              </div>
            </div>          
          </form>
        </div>
          <!-- /.box -->
      </div>
        <!--/.col -->
    </div>
      <!-- /.row --> 
  </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
@endsection