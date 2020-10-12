@extends('layouts.tamplate.master')
@section('title','create member')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <section class="content-header">
        <h1>Tambah Data Anggota</h1>
      </section>
    </div>
  </div>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Data Anggota</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('member.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="box-body">
              <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Nomor Anggota</label>
                  <input type="text" class="form-control @error('nomor_anggota') is-invalid @enderror" required autocomplete="nomor_anggota" name="nomor_anggota"  placeholder="Masukkan Nomor Anggota">
                </div>
                <div class="form-group">
                  <label>Nama </label>
                  <input type="text" class="form-control" name="nama" placeholder="Masukkan nama Anggota">
                </div>
                <div class="form-group">
                  <label>NIK/NISN</label>
                  <input type="text" class="form-control" name="nomor_identitas" placeholder="Masukkan nomor NIK/NISN">
                </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <select class="form-control" name="jabatan" style="width: 100%;">
                    <option selected="selected" value="Guru">Guru</option>
                    <option value="Siswa">Siswa</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Jurusan / Guru Mapel</label>
                  <input type="text" class="form-control" name="jurusan_gurumapel" placeholder="Masukkan jurusan / guru mapel">
                </div>
                <div class="form-group">
                  <label>Kelas</label>
                  <select class="form-control" name="kelas" style="width: 100%;">
                    <option selected="selected" value="-">-</option>
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="jenis_kelamin" style="width: 100%;">
                    <option selected="selected" value="laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukkan tempat lahir">
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat">
                </div>
                <div class="form-group">
                  <label for="foto" >Foto</label>
                  <input type="file" class="uploads form-control" style="margin-top: 10px;" name="foto">
                </div>
              </div>
                <!-- /.right -->
              </div>
                <!-- /.row -->
            </div>
              <!-- /.box-body -->
            <div class="box-footer">
              <div class="row">
                <div class="col-md-4"></div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>&nbsp;&nbsp;&nbsp;
                <a href="{{ url()->previous() }}" class="btn btn-default">Kembali</a>
              </div>
            </div> 
          </form>
        </div>
          <!-- /.box -->
      </div>
        <!-- end right form -->
    </div>
      <!-- /.row --> 
  </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
@endsection
