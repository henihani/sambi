@extends('layouts.tamplate.master')
@section('title','edit buku')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <div class="row">
    <div class="col-md-5"></div>
    <div class="col-md-6">
    <section class="content-header">
      <h1>
        Edit Data Buku
      </h1>
    </section>
    </div>
  </div>
    <!-- awal content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Perbarui Data Buku {{$book->judul}}</h3>
            </div>
            <!-- form -->
            <form action="{{ route('book.update', $book->id) }}" method="POST">
            @csrf
            {{ method_field('PUT') }}
              <div class="box-body">
                <div class="form-group">
                  <label>Inventaris</label>
                  <input type="text" class="form-control" id="inventaris" name="inventaris" value="{{$book->inventaris}}">
                </div>
                <div class="form-group">
                  <label>Tanggal Terima :</label>
                  <div class="input-group date">
                    <input type="date" class="form-control pull-right" id="tanggal_terima" name="tanggal_terima" value="{{$book->tanggal_terima}}">
                  </div>
                </div>
                <div class="form-group">
                  <label>Judul Buku</label>
                  <input type="text" class="form-control" id="judul" name="judul" value="{{$book->judul}}">
                </div>
                <div class="form-group">
                  <label>Pengarang</label>
                  <input type="text" class="form-control" id="pengarang" name="pengarang" value="{{$book->pengarang}}">
                </div>
                <div class="form-group">
                  <label>Penerbit</label>
                  <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{$book->penerbit}}">
                </div>
                <div class="form-group">
                  <label>Tahun Terbit</label>
                  <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" value="{{$book->tahun_terbit}}">
                </div>
                <div class="form-group">
                    <label>Buku Semester</label>
                    <select class="form-control" name="semester" style="width: 100%;">
                        <option selected="selected" {{$book->semester === "-" ? "selected" : ""}}>-</option>
                        <option value="Genap" {{$book->semester === "Genap" ? "selected" : ""}}>Genap</option>
                        <option value="Ganjil" {{$book->semester === "Ganjil" ? "selected" : ""}}>Ganjil</option>
                    </select>  
                </div>
                <div class="form-group">
                  <label>Kelas</label>
                  <select class="form-control" name="kelas" style="width: 100%;">
                    <option selected="selected" {{$book->kelas === "-" ? "selected" : ""}}>-</option>
                    <option value="X" {{$book->kelas === "X" ? "selected" : ""}}>X</option>
                    <option value="XI" {{$book->kelas === "XI" ? "selected" : ""}}>XI</option>
                    <option value="XII" {{$book->kelas === "XII" ? "selected" : ""}}>XII</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Asal Buku</label>
                  <input type="text" class="form-control" id="asal" name="asal" value="{{$book->asal}}">
                </div>
                <div class="form-group">
                  <label>Harga Buku</label>
                  <input type="number" class="form-control" id="harga" name="harga" value="{{$book->harga}}">
                </div>
                <div class="form-group">
                  <label>Nomor ISBN</label>
                  <input type="text" class="form-control" id="isbn" name="isbn" value="{{$book->isbn}}">
                </div>
                <div class="form-group">
                  <label for="categories_id">Kategori</label>
                  <input type="text" class="form-control" id="categories_id" name="categories_id" value="{{$book->categories->kategori}}">
                </div>
                <div class="form-group">
                  <label>Callnumber</label>
                  <input type="text" class="form-control" id="callnumber" name="callnumber" value="{{$book->callnumber}}">
                </div>
                <div class="form-group">
                  <label>Lokasi</label>
                  <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{$book->lokasi}}">
                </div>
                <div class="form-group">
                  <label>Deskripsi</label>
                  <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{$book->deskripsi}}">
                </div>
                <div class="form-group">
                  <label>Sampul</label>
                  <img width="120" height="160" src="/image/books/{{ $book->sampul }}"> 
                  <input type="file" class="form-control" id="sampul" name="sampul" >
                </div>
                  
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="row">
                  <div class="col-md-4"></div>
                  <button type="submit" class="btn btn-primary">Perbarui</button>&nbsp;&nbsp;&nbsp;
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