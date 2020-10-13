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
            <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="box-body">
                <div class="form-group{{ $errors->has('inventaris') ? ' has-error' : '' }}">
                  <label>Inventaris</label>
                  <input type="text" class="form-control" id="inventaris" name="inventaris" value="{{ old('inventaris') }}" placeholder="Masukkan Inventaris">
                  @if ($errors->has('inventaris'))
                    <span class="help-block">
                        <strong>{{ $errors->first('inventaris') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('tanggal_terima') ? ' has-error' : '' }}">
                  <label>Tanggal Terima :</label>
                  <div class="input-group date">
                    <input type="date" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->toDateString())) }}" class="form-control pull-right" id="tanggal_terima" name="tanggal_terima">
                  </div>
                  @if ($errors->has('tanggal_terima'))
                    <span class="help-block">
                        <strong>{{ $errors->first('tanggal_terima') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                  <label>Judul Buku</label>
                  <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul">
                  @if ($errors->has('judul'))
                    <span class="help-block">
                        <strong>{{ $errors->first('judul') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('pengarang') ? ' has-error' : '' }}">
                  <label>Pengarang</label>
                  <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Masukkan Nama Pengarang">
                  @if ($errors->has('pengarang'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pengarang') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('penerbit') ? ' has-error' : '' }}">
                  <label>Penerbit</label>
                  <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Masukkan Penerbit Buku">
                  @if ($errors->has('penerbit'))
                    <span class="help-block">
                        <strong>{{ $errors->first('penerbit') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('tahun_terbit') ? ' has-error' : '' }}">
                  <label>Tahun Terbit</label>
                  <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="Masukkan Tahun Terbit">
                  @if ($errors->has('tahun_terbit'))
                    <span class="help-block">
                        <strong>{{ $errors->first('tahun_terbit') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('semester') ? ' has-error' : '' }}">
                    <label>Buku Semester</label>
                    <select class="form-control" name="semester" style="width: 100%;">
                        <option selected="selected" value="-">-</option>
                        <option value="Genap">Genap</option>
                        <option value="Ganjil">Ganjil</option>
                    </select> 
                    @if ($errors->has('semester'))
                    <span class="help-block">
                        <strong>{{ $errors->first('semester') }}</strong>
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
                <div class="form-group{{ $errors->has('asal') ? ' has-error' : '' }}">
                  <label>Asal Buku</label>
                  <input type="text" class="form-control" id="asal" name="asal" placeholder="Buku berasal dari">
                  @if ($errors->has('asal'))
                    <span class="help-block">
                        <strong>{{ $errors->first('asal') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('harga') ? ' has-error' : '' }}">
                  <label>Harga Buku</label>
                  <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga Buku">
                  @if ($errors->has('harga'))
                    <span class="help-block">
                        <strong>{{ $errors->first('harga') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('categories_id') ? ' has-error' : '' }}">
                  <label for="categories_id">Kategori</label>
                  <select class="form-control select2" name="categories_id" style="width: 100%;">
                    @foreach ($category as $categories)
                    <option value="{{ $categories->id}}">{{$categories->kategori}}</option>
                    @endforeach
                  </select>
                  @if ($errors->has('categories_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('categories_id') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('callnumber') ? ' has-error' : '' }}">
                  <label>Callnumber</label>
                  <input type="text" class="form-control" id="callnumber" name="callnumber" placeholder="Masukkan callnumber">
                  @if ($errors->has('callnumber'))
                    <span class="help-block">
                        <strong>{{ $errors->first('callnumber') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('lokasi') ? ' has-error' : '' }}">
                  <label>Lokasi</label>
                  <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Masukkan lokasi buku">
                  @if ($errors->has('lokasi'))
                    <span class="help-block">
                        <strong>{{ $errors->first('lokasi') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('isbn') ? ' has-error' : '' }}">
                  <label>Nomor ISBN</label>
                  <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Nomor ISBN">
                  @if ($errors->has('isbn'))
                    <span class="help-block">
                        <strong>{{ $errors->first('isbn') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                  <label>Deskripsi</label>
                  <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="masukan deskripsi buku">
                  @if ($errors->has('deskripsi'))
                    <span class="help-block">
                        <strong>{{ $errors->first('deskripsi') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('sampul') ? ' has-error' : '' }}">
                  <label>Sampul</label>
                  <input type="file" class="form-control" id="sampul" name="sampul" >
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