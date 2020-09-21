@extends('layouts.tamplate.master')
@section('title','Laporan Pengunjung')

@section('content')
<!-- Isi File siswa.php-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan Pengunjung
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="col-lg-4">
                <h4>Laporan Pengunjung</h4>
              </div>
            </div>
            <div class="box-body">
              <div class="col-md-2 pull-left">
                <a href="" class="btn btn-primary"><b><i class="fa fa-download"></i> Export PDF</a></b>
              </div>
                <a href="" class="btn btn-success"><b><i class="fa fa-download"></i> Export EXCEL</a></b>
            </div>
        </div>
      </div>
    </section>
</div>
@endsection