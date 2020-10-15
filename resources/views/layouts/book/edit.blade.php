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
            <form action="{{ route('book.update', $book->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('inventaris') ? ' is-invalid' : '' }}">
                  <label>Inventaris</label>
                  <input type="text" class="form-control" id="inventaris" name="inventaris" value="{{$book->inventaris}}">
                  @if ($errors->has('inventaris'))
                    <span class="help-block">
                        <strong>{{ $errors->first('inventaris') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('tanggal_terima') ? ' is-invalid' : '' }}">
                  <label>Tanggal Terima :</label>
                  <input type="date" class="form-control" id="tanggal_terima" name="tanggal_terima" value="{{$book->tanggal_terima}}">
                  @if ($errors->has('tanggal_terima'))
                    <span class="help-block">
                        <strong>{{ $errors->first('tanggal_terima') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('judul') ? ' is-invalid' : '' }}">
                  <label>Judul Buku</label>
                  <input type="text" class="form-control" id="judul" name="judul" value="{{$book->judul}}">
                  @if ($errors->has('judul'))
                    <span class="help-block">
                        <strong>{{ $errors->first('judul') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('pengarang') ? ' is-invalid' : '' }}">
                  <label>Pengarang</label>
                  <input type="text" class="form-control" id="pengarang" name="pengarang" value="{{$book->pengarang}}">
                  @if ($errors->has('pengarang'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pengarang') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('penerbit') ? ' is-invalid' : '' }}">
                  <label>Penerbit</label>
                  <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{$book->penerbit}}">
                  @if ($errors->has('penerbit'))
                    <span class="help-block">
                        <strong>{{ $errors->first('penerbit') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('tahun_terbit') ? ' is-invalid' : '' }}">
                  <label>Tahun Terbit</label>
                  <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" value="{{$book->tahun_terbit}}">
                  @if ($errors->has('tahun_terbit'))
                    <span class="help-block">
                        <strong>{{ $errors->first('tahun_terbit') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('semester') ? ' is-invalid' : '' }}">
                  <label>Buku Semester</label>
                  <select class="form-control" name="semester" style="width: 100%;">
                      <option selected="selected" {{$book->semester === "-" ? "selected" : ""}}>-</option>
                      <option value="Genap" {{$book->semester === "Genap" ? "selected" : ""}}>Genap</option>
                      <option value="Ganjil" {{$book->semester === "Ganjil" ? "selected" : ""}}>Ganjil</option>
                  </select>
                  @if ($errors->has('semester'))
                    <span class="help-block">
                        <strong>{{ $errors->first('semester') }}</strong>
                    </span>
                  @endif  
                </div>
                <div class="form-group{{ $errors->has('kelas') ? ' is-invalid' : '' }}">
                  <label>Kelas</label>
                  <select class="form-control" name="kelas" style="width: 100%;">
                    <option selected="selected" {{$book->kelas === "-" ? "selected" : ""}}>-</option>
                    <option value="X" {{$book->kelas === "X" ? "selected" : ""}}>X</option>
                    <option value="XI" {{$book->kelas === "XI" ? "selected" : ""}}>XI</option>
                    <option value="XII" {{$book->kelas === "XII" ? "selected" : ""}}>XII</option>
                  </select>
                  @if ($errors->has('kelas'))
                    <span class="help-block">
                        <strong>{{ $errors->first('kelas') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('asal') ? ' is-invalid' : '' }}">
                  <label>Asal Buku</label>
                  <input type="text" class="form-control" id="asal" name="asal" value="{{$book->asal}}">
                  @if ($errors->has('asal'))
                    <span class="help-block">
                        <strong>{{ $errors->first('asal') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('harga') ? ' is-invalid' : '' }}">
                  <label>Harga Buku</label>
                  <input type="number" class="form-control" id="harga" name="harga" value="{{$book->harga}}">
                  @if ($errors->has('harga'))
                    <span class="help-block">
                        <strong>{{ $errors->first('harga') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('isbn') ? ' is-invalid' : '' }}">
                  <label>Nomor ISBN</label>
                  <input type="text" class="form-control" id="isbn" name="isbn" value="{{$book->isbn}}">
                  @if ($errors->has('isbn'))
                    <span class="help-block">
                        <strong>{{ $errors->first('isbn') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('categories_id') ? ' is-invalid' : '' }}">
                  <label for="categories_id">Kategori</label>
                  <select name="categories_id" class="form-control select2" id="">
                  @foreach($categories as $cat)
                  <option value="{{$cat->id}}" {{ $book->categories->id === $cat->id ? 'selected' : '' }}>{{$cat->kategori}}</option>
                  @endforeach
                  </select>
                  @if ($errors->has('categories_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('categories_id') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('callnumber') ? ' is-invalid' : '' }}">
                  <label>Callnumber</label>
                  <input type="text" class="form-control" id="callnumber" name="callnumber" value="{{$book->callnumber}}">
                  @if ($errors->has('callnumber'))
                    <span class="help-block">
                        <strong>{{ $errors->first('callnumber') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('lokasi') ? ' is-invalid' : '' }}">
                  <label>Lokasi</label>
                  <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{$book->lokasi}}">
                  @if ($errors->has('lokasi'))
                    <span class="help-block">
                        <strong>{{ $errors->first('lokasi') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('deskripsi') ? ' is-invalid' : '' }}">
                  <label>Deskripsi</label>
                  <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{$book->deskripsi}}">
                  @if ($errors->has('deskripsi'))
                    <span class="help-block">
                        <strong>{{ $errors->first('deskripsi') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('sampul') ? ' is-invalid' : '' }}">
                  <label>Sampul</label>
                  <img width="120" height="160" src="/image/books/{{ $book->sampul }}"> 
                  <input type="file" class="form-control" id="sampul" name="sampul" >
                  <input type="hidden" name="sampulbackup" value="{{$book->sampul}}">
                  @if ($errors->has('sampul'))
                    <span class="help-block">
                        <strong>{{ $errors->first('sampul') }}</strong>
                    </span>
                  @endif
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