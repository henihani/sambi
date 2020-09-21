@extends('layouts.tamplate.master')
@section('title','peminjaman')

@section('content')
<!-- Isi File siswa.php-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Data Petugas Perpustakaan "Cemerlang" SMK Negeri 1 Sambi</h1>
    </section>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <!-- box -->
          <div class="box">
            <div class="box-header">  
              <div class="col-lg-2">
                  <a href="{{ route('user.create') }}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i>{{ __(' Tambah Data') }}</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @if (session('delete'))
              <div class="alert alert-danger" role="alert">
                {{ session('delete') }}
              </div>
              @endif
              <div class="box-body">
              @if (session('success'))
              <div class="alert alert-success" role="alert">
              {{ session('success') }}
              </div>
              @endif
            <div class="table-responsive" style="overflow: auto">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Created At</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$user->nama}}</td>
                    <th>{{$user->email}}</th>    
                    <td>{{$user->role}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>
                      <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                      @csrf
                        <button class="btn btn-block btn-danger" type="submit" name="delete" onclick="javascript: return confirm('Hapus data petugas {{$user->nama}}')">Hapus</button>
                        <input type="hidden" name="_method" value="delete" >
                      </form>
                    </td>
                  </tr>
                @endforeach 
                </tbody>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Created At</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
              </table>
            </div>
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


