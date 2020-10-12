@extends('layouts.tamplate.master')
@section('title','visitor')

@section('content')
<!-- Isi File siswa.php-->
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-8">
      <section class="content-header">
        <h1>Pengunjung Perpustakaan "Cemerlang" SMK N 1 Sambi</h1>
      </section>
    </div>
  </div>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- box -->
          <div class="box">
            <div class="box-header"> 
              <div class="col-lg-2">
                <a href="{{ route('visitor.create') }}" class="btn btn-primary btn-rounded btn-fw" data-target="#tambahData"><i class="fa fa-plus"></i> &nbsp; Pengunjung</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            @if (session('delete'))
            <div class="alert alert-danger" role="alert">
            {{ session('delete') }}
            </div>
            @endif
            <div class="table-responsive" style="overflow: auto">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal Kunjungan</th>
                      <th>Nomor Identitas</th>
                      <th>Nama</th>
                      <th>Detail</th>
                      <th>Hapus</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($visitors as $visitor)
                      <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ date('d/m/y', strtotime($visitor->tanggal_kunjungan))}}</td>
                        <td>{{ $visitor->members->nomor_identitas}}</td>
                        <td>{{ $visitor->members->nama}}</td>
                        <td>
                          <a href="{{route('visitor.show', $visitor->id)}}"> 
                          <button class="btn btn-block btn-warning" type="submit" name="" >Detail</button>
                          </a>
                        </td>
                        <td>
                          <form action="{{ route('visitor.destroy', $visitor->id) }}" method="POST">
                          @csrf
                            <button class="btn btn-block btn-danger" type="submit" name="delete" onclick="javascript: return confirm('Hapus data dengan nama {{$visitor->nama}}')">Hapus</button>
                            <input type="hidden" name="_method" value="delete" >
                          </form>
                        </td>
                      </tr> 
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Tanggal Kunjungan</th>
                      <th>Nomor Identitas</th>
                      <th>Nama</th>
                      <th>Detail</th>
                      <th>Hapus</th> 
                    </tr>
                  </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection