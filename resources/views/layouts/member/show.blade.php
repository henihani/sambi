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
            <h3 class="box-title">Detail <b>{{$members->nama}}</b></h3>
          </div>
          <!-- form start -->
          <form >
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Nomor Anggota</label>
                    <input type="text" class="form-control" name="nomor_anggota" value="{{ $members->nomor_anggota }}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Nama Anggota</label>
                    <input type="text" class="form-control" name="nama" value="{{ $members->nama }}" disabled>
                  </div>
                  <div class="form-group">
                    <label>NIK/NISN</label>
                    <input type="text" class="form-control" name="nomor_identitas" value="{{ $members->nomor_identitas }}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" value="{{$members->jabatan}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Jurusan / Guru Mapel</label>
                    <input type="text" class="form-control" name="jurusan_gurumapel" value="{{ $members->jurusan_gurumapel }}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" class="form-control" name="kelas" value="{{$members->kelas}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jenis_kelamin" value="{{$members->jenis_kelamin}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" value="{{ $members->tempat_lahir }}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $members->tanggal_lahir }}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{ $members->alamat }}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="foto">Foto</label>
                    <img width="120" height="160" src="/image/members/{{ $members->foto }}">      
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