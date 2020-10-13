@extends('layouts.tamplate.master')
@section('title','create visitor')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-6">
    <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>Tambah Data Pengunjung</h1>
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
            <h3 class="box-title">Input Data Pengunjung</h3>
          </div>
          <!-- form -->
          <form action="{{ route('visitor.store') }}" method="POST">
            {{ csrf_field() }}
              <div class="box-body">
              @if (session('success'))
                <div class="alert alert-success" role="alert">
                {{ session('success') }}
                </div>
              @endif
                <div class="form-group{{ $errors->has('tanggal_kunjungan') ? ' has-error' : '' }}">
                  <label>Tanggal</label>
                  <input type="date" class="form-control" id="tanggal_kunjungan" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->toDateString())) }}"  name="tanggal_kunjungan">
                  @if ($errors->has('tanggal_kunjungan'))
                    <span class="help-block">
                        <strong>{{ $errors->first('tanggal_kunjungan') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('nomor_identitas') ? ' has-error' : '' }}">
                  <label for="categories_id">Nomor Identitas</label>
                    <select class="form-control select2" name="members_id" style="width: 100%;">
                      @foreach ($member as $members)
                      <option value="{{ $members->id}}">{{$members->nomor_identitas}}</option>
                      @endforeach
                    </select>
                    @if ($errors->has('nomor_identitas'))
                      <span class="help-block">
                          <strong>{{ $errors->first('nomor_identitas') }}</strong>
                      </span>
                    @endif
                  </div>
              </div>
              <div class="box-footer">
                <div class="row">
                  <div class="col-md-4"></div>
                  <button type="submit" class="btn btn-primary">Tambah Data</button>&nbsp;&nbsp;&nbsp;
                  <a href="{{ route('visitor.index') }}" class="btn btn-default">Kembali</a>
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