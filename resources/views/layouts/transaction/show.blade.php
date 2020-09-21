@extends('layouts.tamplate.master')
@section('title','show transaction')
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
            <h3 class="box-title">Detail </h3>
          </div>
          <!-- form start -->
          <form>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Tanggal Pinjam</label>
                    <input type="text" class="form-control" name="tanggal_pinjam" value="{{$transaction->tanggal_pinjam}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Kembali</label>
                    <input type="text" class="form-control" name="tanggal_kembali" value="{{$transaction->tanggal_kembali}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Nomor Anggota</label>
                    <input type="text" class="form-control" name="nomor_anggota" value="{{$transaction->members->nomor_anggota}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{$transaction->members->nama}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Jurusan / Guru Mapel</label>
                    <input type="text" class="form-control" name="jurusan" value="{{$transaction->members->jurusan_gurumapel}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" class="form-control" name="kelas" value="{{$transaction->members->kelas}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>ISBN</label>
                    <input type="text" class="form-control" name="isbn" value="{{$transaction->books->isbn}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="judul" value="{{$transaction->books->judul}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Status</label>
                    <input type="text" class="form-control" name="status" value="{{$transaction->status}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Denda</label>
                    <input type="text"  class="form-control" name="denda" value="{{$transaction->denda}}" disabled>
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