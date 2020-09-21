@extends('layouts.tamplate.master')
@section('title','Edit category')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-6">
      <section class="content-header">
        <h1>Edit Data Kategori Buku</h1>
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
              <h3 class="box-title">Perbarui Data Kategori</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('category.update', $category->id) }}" method="POST">
            @csrf
            {{ method_field('PUT') }}
              <div class="box-body">
                <div class="form-group">
                  <label>Kategori</label>
                  <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $category->kategori }}" placeholder="Masukkan Kategori Buku">
                </div>
                <div class="form-group">
                  <label>Nomor Kategori</label>
                  <input type="text" class="form-control" id="nomorkategori" name="nomor_kategori" value="{{ $category->nomor_kategori }}">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="row">
                  <div class="col-md-4"></div>
                  <button type="submit" class="btn btn-primary">Perbarui</button>&nbsp;&nbsp;&nbsp;
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