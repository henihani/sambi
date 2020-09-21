@extends('layouts.tamplate.master')
@section('title','edit transaksi')
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
            <h3 class="box-title">Edit Data Anggota</h3>
          </div>
          <!-- form start -->
          <form action="{{ route('transaction.update',$transactions->id) }}" method="POST">
          @csrf
          {{ method_field('PUT') }}
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Pengembalian</label>
                    <input type="text" class="form-control" name="tanggal_kembali" value="{{$transactions->tanggal_kembali}}">
                  </div>
                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status" style="width: 100%;">
                      <option value ="Kembali" selected="selected" {{$transactions->status === "Kembali" ? "selected" : ""}}>Sudah Kembali</option>
                      <option value="Pinjam" {{$transactions->status === "Pinjam" ? "selected" : ""}}>Pinjam</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Denda</label>
                    <input type="text" class="form-control" name="denda" value="{{$transactions->denda}}">
                  </div>  
                </div>
              </div>
                  <!-- /.row -->
            </div>
                <!-- /.box-body -->
            <div class="box-footer">
                <div class="row">
                  <div class="col-md-4"></div>
                  <button type="submit" class="btn btn-primary">Pengembalian</button>&nbsp;&nbsp;&nbsp;
                  <a href="{{ url()->previous() }}" class="btn btn-default">Kembali</a>
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