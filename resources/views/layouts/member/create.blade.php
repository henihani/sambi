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
                <div class="form-group{{ $errors->has('nomor_anggota') ? ' has-error' : '' }}">
                  <label>Nomor Anggota</label>
                  <input type="text" class="form-control" name="nomor_anggota"  placeholder="Masukkan Nomor Anggota" required>
                  @if ($errors->has('nomor_anggota'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nomor_anggota') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                  <label>Nama </label>
                  <input type="text" class="form-control" name="nama" placeholder="Masukkan nama Anggota" required>
                  @if ($errors->has('nama'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nama') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('nomor_identitas') ? ' has-error' : '' }}">
                  <label>NIK/NISN</label>
                  <input type="text" class="form-control" name="nomor_identitas" placeholder="Masukkan nomor NIK/NISN" required>
                  @if ($errors->has('nomor_identitas'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nomor_identitas') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
                  <label>Jabatan</label>
                  <select class="form-control" name="jabatan" style="width: 100%;">
                    <option selected="selected" value="Guru">Guru</option>
                    <option value="Siswa">Siswa</option>
                  </select>
                  @if ($errors->has('jabatan'))
                    <span class="help-block">
                        <strong>{{ $errors->first('jabatan') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('jurusan_gurumapel') ? ' has-error' : '' }}">
                  <label>Jurusan / Guru Mapel</label>
                  <input type="text" class="form-control" name="jurusan_gurumapel" placeholder="Masukkan jurusan / guru mapel" required>
                  @if ($errors->has('jurusan_gurumapel'))
                    <span class="help-block">
                        <strong>{{ $errors->first('jurusan_gurumapel') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('kelas') ? ' has-error' : '' }}">
                  <label>Kelas</label>
                  <select class="form-control" name="kelas" style="width: 100%;">
                    <option selected="selected" value="-">-</option>
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                  </select>
                  @if ($errors->has('kelas'))
                    <span class="help-block">
                        <strong>{{ $errors->first('kelas') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="jenis_kelamin" style="width: 100%;">
                    <option selected="selected" value="laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                  @if ($errors->has('jenis_kelamin'))
                    <span class="help-block">
                        <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukkan tempat lahir" required>
                  @if ($errors->has('tempat_lahir'))
                    <span class="help-block">
                        <strong>{{ $errors->first('tempat_lahir') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
                  <label>Tanggal Lahir</label>
                  <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                  @if ($errors->has('tanggal_lahir'))
                    <span class="help-block">
                        <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                  <label>Alamat</label>
                  <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat" required>
                  @if ($errors->has('alamat'))
                    <span class="help-block">
                        <strong>{{ $errors->first('alamat') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('foto') ? ' has-error' : '' }}">
                  <label for="foto" >Foto</label>
                  <input type="file" class="uploads form-control" style="margin-top: 10px;" name="foto" required>
                  @if ($errors->has('foto'))
                    <span class="help-block">
                        <strong>{{ $errors->first('foto') }}</strong>
                    </span>
                  @endif
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
