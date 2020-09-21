@extends('layouts.tamplate.master')
@section('title','user create')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-6">
        <section class="content-header">
          <h1>Tambah Petugas Perpustakaan</h1>
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
              <h3 class="box-title">Input Data Petugas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('user.store') }}" method="POST">
            @csrf
              <div class="box-body">
                    <div class="form-group">
                      <label>{{ __('Nama') }}</label>
                      <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="name" placeholder="Masukkan nama petugas">
                    </div>
                    <div class="form-group">
                      <label>{{ __('E-Mail Address') }}</label>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" name="nama" placeholder="Masukkan email petugas">
                    <div class="form-group">
                      <label for="password">{{ __('Password') }}</label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password" placeholder="Masukkan password">
                    </div>
                    <div class="form-group">
                      <label for="password-confirm">{{ __('Confirm Password') }}</label>
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Masukkan password">
                    </div>
                    <div class="form-group">
                        <label for="previlage" >{{ __('Previlage') }}</label>
                            <select name="role" id="" class="form-control">
                                <option value="">Pilih Hak Akses</option>
                                <option value="Petugas">Petugas</option>
                                <option value="Kepala Perpus">Kepala Perpustakaan</option>
                            </select>
                    </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">{{ __('Tambah Data') }}</button>&nbsp;&nbsp;&nbsp;
                <a href="{{ route('user.index') }}"><button class="btn btn-default">Kembali</button></a>
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