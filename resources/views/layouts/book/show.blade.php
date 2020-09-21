@extends('layouts.tamplate.master')
@section('title','show book')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-8">
      <section class="content-header">
        <h1>Data Buku Perpustakaan "Cemerlang" SMK N 1 Sambi</h1>
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
            <h3 class="box-title">Detail Buku</h3>
          </div>
          <!-- form start -->
          <form>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Inventaris</label>
                    <input type="text" class="form-control" name="inventaris" value="{{$book->inventaris}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Terima</label>
                    <input type="text" class="form-control" name="tanggal_terima" value="{{$book->tanggal_terima}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="judul" value="{{$book->judul}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Pengarang</label>
                    <input type="text" class="form-control" name="pengarang" value="{{$book->pengarang}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Penerbit</label>
                    <input type="text" class="form-control" name="penerbit" value="{{$book->penerbit}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Tahun Terbit</label>
                    <input type="text" class="form-control" name="tahun_terbit" value="{{$book->tahun_terbit}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Semester</label>
                    <input type="text" class="form-control" name="semester" value="{{$book->semester}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" class="form-control" name="kelas" value="{{$book->kelas}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Asal</label>
                    <input type="text" class="form-control" name="asal" value="{{$book->asal}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Harga</label>
                    <input type="text" class="form-control" name="harga" value="{{$book->harga}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>ISBN</label>
                    <input type="text" class="form-control" name="isbn" value="{{$book->isbn}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Callnumber</label>
                    <input type="text" class="form-control" name="callnumber" value="{{$book->callnumber}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Kategori</label>
                    <input type="text" class="form-control" name="categories_id" value="{{$book->categories->kategori}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Lokasi</label>
                    <input type="text" class="form-control" name="lokasi" value="{{$book->lokasi}}" disabled>
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