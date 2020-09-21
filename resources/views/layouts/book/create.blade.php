@extends('layouts.tamplate.master')
@section('title','create buku')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <section class="content-header">
        <h1>Tambah Data Buku</h1>
      </section>
    </div>
  </div>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- column -->
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Data Buku</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('book.store') }}" method="POST">
            @csrf
              <div class="box-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Inventaris</label>
                      <input type="text" class="form-control" id="inventaris" name="inventaris" value="{{ old('inventaris') }}" placeholder="Masukkan Inventaris">
                    </div>
                    <div class="form-group">
                      <label>Tanggal Terima :</label>
                      <div class="input-group date">
                        <input type="date" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->toDateString())) }}" class="form-control pull-right" id="tanggal_terima" name="tanggal_terima">
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Judul Buku</label>
                      <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul">
                    </div>
                    <div class="form-group">
                      <label>Pengarang</label>
                      <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Masukkan Nama Pengarang">
                    </div>
                    <div class="form-group">
                      <label>Penerbit</label>
                      <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Masukkan Penerbit Buku">
                    </div>
                    <div class="form-group">
                      <label>Tahun Terbit</label>
                      <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="Masukkan Tahun Terbit">
                    </div>
                    <div class="form-group">
                        <label>Buku Semester</label>
                        <select class="form-control" name="semester" style="width: 100%;">
                            <option selected="selected" value="-">-</option>
                            <option value="Genap">Genap</option>
                            <option value="Ganjil">Ganjil</option>
                        </select>  
                    </div>
                  </div>
                  <!-- end bag 1 -->
                  <div class="col-md-6">
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
                      <label>Asal Buku</label>
                      <input type="text" class="form-control" id="asal" name="asal" placeholder="Buku berasal dari">
                    </div>
                    <div class="form-group">
                      <label>Harga Buku</label>
                      <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga Buku">
                    </div>
                    <div class="form-group">
                      <label for="categories_id">Kategori</label>
                      <select class="form-control" name="categories_id" style="width: 100%;">
                        @foreach ($category as $categories)
                        <option value="{{ $categories->id}}">{{$categories->kategori}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Callnumber</label>
                      <input type="text" class="form-control" id="callnumber" name="callnumber" placeholder="Masukkan callnumber">
                    </div>
                    <div class="form-group">
                      <label>Lokasi</label>
                      <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Masukkan lokasi buku">
                    </div>
                    <div class="form-group">
                      <label>Nomor ISBN</label>
                      <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Nomor ISBN">
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="row">
                  <div class="col-md-4"></div>
                  <button type="submit" class="btn btn-primary">Tambah Data</button>&nbsp;&nbsp;&nbsp;
                  <a href="{{ route('book.index') }}" class="btn btn-default">Kembali</a>
                </div>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row --> 
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection