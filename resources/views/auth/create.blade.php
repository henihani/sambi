@extends('layouts.tamplate.master')
@section('title','create user')

@section('content')
<!-- Isi File siswa.php-->
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-8">
      <section class="content-header">
        <h1>Petugas Perpustakaan "Cemerlang" SMK Negeri 1 Sambi</h1>
      </section>
    </div>
  </div>
    <!-- Main content -->
    <section class="content">
    <div class="row">
      <div class="col-md-3"></div>
        <!-- left column -->
      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Input Data Petugas</h3>
          </div>
          <!-- form -->
          <form action="{{ route('user.store') }}" method="POST">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                  <label>Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama"  placeholder="Masukkan nama petugas" require>
                  @if ($errors->has('nama'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nama') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label>Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email petugas" require>
                  @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label>Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan paswword" require>
                  @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                  <label>Hak Akses</label>
                  <select name="role" id="" class="form-control">
                    <option value="">Pilih Hak Akses</option>
                    <option value="Petugas">Petugas</option>
                    <option value="Kepala Perpus">Kepala Perpustakaan</option>
                  </select>
                  @if ($errors->has('role'))
                    <span class="help-block">
                        <strong>{{ $errors->first('role') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              <div class="box-footer">
                <div class="row">
                  <div class="col-md-4"></div>
                  <button type="submit" class="btn btn-primary">Tambah Data</button>&nbsp;&nbsp;&nbsp;
                  <a href="{{ route('user.index') }}" class="btn btn-default">Kembali</a>
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


