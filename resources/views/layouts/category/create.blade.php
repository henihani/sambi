@extends('layouts.tamplate.master')
@section('title','create category')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-6">
    <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Tambah Data Kategori Buku
        </h1>
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
            <h3 class="box-title">Input Data Kategori</h3>
          </div>
          <!-- form -->
          <form action="{{ route('category.store') }}" method="POST">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('kategori') ? ' has-error' : '' }}">
                  <label>Kategori</label>
                  <input type="text" class="form-control" id="kategori" name="kategori" value="{{ old('kategori') }}" placeholder="Masukkan Kategori Buku" required>
                  @if ($errors->has('kategori'))
                    <span class="help-block">
                        <strong>{{ $errors->first('kategori') }}</strong>
                    </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('nomor_kategori') ? ' has-error' : '' }}">
                  <label>Nomor Kategori</label>
                  <input type="text" class="form-control" id="nomorkategori" name="nomor_kategori" placeholder="Nomor Kategori" required>
                  @if ($errors->has('nomor_kategori'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nomor_kategori') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              <div class="box-footer">
                <div class="row">
                  <div class="col-md-4"></div>
                  <button type="submit" class="btn btn-primary">Tambah Data</button>&nbsp;&nbsp;&nbsp;
                  <a href="{{ route('category.index') }}" class="btn btn-default">Kembali</a>
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