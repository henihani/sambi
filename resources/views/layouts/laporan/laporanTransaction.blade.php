@extends('layouts.tamplate.master')
@section('title','Laporan Transaction')

@section('content')
<!-- Isi File siswa.php-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan Transaksi
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="box">
              <div class="box-header">
                <div class="col-lg-12">
                <h4>Cetak Laporan Transaksi</h4>
                </div>
              </div>
              <div class="box-body">
              <div class="col-md-2 pull-left">
                <a href="{{url('/laporanTransaksi/pdf')}}" class="btn btn-primary"><b><i class="fa fa-download"></i> Export PDF</a></b>
              </div>
                
            </div>
        </div>
      </div>
    </section>
</div>
@endsection