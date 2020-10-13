@extends('layouts.tamplate.master')
@section('title','create peminjaman')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Peminjaman Buku Perpustakaan "Cemerlang"
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Peminjaman</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('transaction.store') }}" method="POST">
            @csrf
              <div class="box-body">
                <div class="row">
                  <div class="col-md-12">
                    
                    <div class="form-group{{ $errors->has('tanggal_pinjam') ? ' has-error' : '' }}">
                      <label>Tanggal Pinjam :</label>
                      <input type="date" class="form-control" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->toDateString())) }}" id="tanggal_pinjam" name="tanggal_pinjam" require>
                      @if ($errors->has('tanggal_pinjam'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tanggal_pinjam') }}</strong>
                        </span>
                      @endif
                    </div>
                    <div class="form-group{{ $errors->has('tanggal_kembali') ? ' has-error' : '' }}">
                      <label>Tanggal Kembali :</label>
                      <input type="date" class="form-control" id="tanggal_kembali" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->addDays(7)->toDateString())) }}" name="tanggal_kembali">
                      @if ($errors->has('tanggal_kembali'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tanggal_kembali') }}</strong>
                        </span>
                      @endif
                    </div>
                    <div class="form-group{{ $errors->has('nomor_anggota') ? ' has-error' : '' }}">
                      <label for="members_id">Nomor Anggota</label>
                      <select class="form-control select2" name="members_id" style="width: 100%;">
                        @foreach ($members as $member)
                        <option value="{{ $member->id}}">{{$member->nomor_anggota}}</option>
                        @endforeach
                      </select>
                      @if ($errors->has('nomor_anggota'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nomor_anggota') }}</strong>
                        </span>
                      @endif
                    </div>
                    <div class="form-group{{ $errors->has('isbn') ? ' has-error' : '' }}">
                      <label for="members_id">ISBN</label>
                      <select class="form-control select2" name="books_id" style="width: 100%;">
                        @foreach ($books as $book)
                        <option value="{{ $book->id}}">{{$book->isbn}}</option>
                        @endforeach
                      </select>
                      @if ($errors->has('isbn'))
                        <span class="help-block">
                            <strong>{{ $errors->first('isbn') }}</strong>
                        </span>
                      @endif
                    </div>
                    
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="row">
                  <div class="col-md-4"></div>
                  <button type="submit" class="btn btn-primary">Pinjam</button>&nbsp;&nbsp;&nbsp;
                  <a href="{{ url()->previous() }}" class="btn btn-default">Kembali</a>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row --> 
    </section>
    </div>
</div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection