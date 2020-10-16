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
                      <th>Nomor Anggota</th>
                      <th>Nama</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($visitors as $visitor)
                      <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ date('d/m/y', strtotime($visitor->tanggal_kunjungan))}}</td>
                        <td>{{ $visitor->members->nomor_anggota}}</td>
                        <td>{{ $visitor->members->nama}}</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                              Action &nbsp;
                              <span class="caret"></span>
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="{{route('visitor.show', $visitor->id)}}"><i class="fa fa-folder-open">&nbsp; Detail</i></a></li>
                              <li class="divider"></li>
                              <li><a href="#">
                                <form action="{{ route('visitor.destroy', $visitor->id) }}" method="POST">
                                @csrf
                                  <button class="btn btn-block btn-danger" type="submit" name="delete" onclick="javascript: return confirm('Hapus data dengan nama {{$visitor->nama}}')">
                                    <i class="fa fa-trash">&nbsp; Hapus</i>
                                  </button>
                                  <input type="hidden" name="_method" value="delete" >
                                </form>
                              </a></li>
                            </ul>
                          </div>
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
                      <th>Aksi</th>
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