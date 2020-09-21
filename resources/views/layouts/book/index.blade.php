
@extends('layouts.tamplate.master')
@section('title','buku')

@section('content')
<!-- Isi File book.php-->
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-8">
      <section class="content-header">
        <h1>Data Buku Perpustakaan "Cemerlang" SMK N 1 Sambi</h1>
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
            <div class="row">
              <div class="col-xs-12">
              <div class="col-lg-2">
                  <a href="{{ route('book.create') }}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Buku</a>
              </div>
              <div class="col-md-6"></div>
                <div class="col-md-4">
                  <form class="">
                    <div class="input-group">
                      <input type="file" class="form-control">
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-primary">Import</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            @if (session('success'))
              <div class="alert alert-success" role="alert">
              {{ session('success') }}
              </div>
            @endif
            @if (session('update'))
              <div class="alert alert-info" role="alert">
              {{ session('update') }}
              </div>
            @endif
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
                    <th>ISBN</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Semester</th> 
                    <th>Kelas</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($books as $book)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                      <a href="{{route('book.show', $book->id)}}">
                        {{$book->isbn}}
                      </a>  
                    </td>     
                    <td>{{$book->judul}}</td>
                    <td>{{$book->pengarang}}</td>
                    <td>{{$book->semester}}</td>
                    <td>{{$book->kelas}}</td>
                    <td>status</td>
                    <td>
                      <a href="{{route('book.edit', $book->id) }}">
                        <button class="btn btn-primary" type="submit" name="delete">Edit</button>
                      </a>
                    </td>
                      <td>
                        <form action="{{route('book.destroy', $book->id) }}" method="POST">
                        @csrf
                          <button class="btn btn-danger" type="submit" name="delete" onclick="javascript: return confirm('Hapus data dengan {{$book->judul}} ')">Hapus</button>
                          <input type="hidden" name="_method" value="delete" >
                        </form>
                      </td>
                  </tr> 
                @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>ISBN</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Semester</th> 
                    <th>Kelas</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Hapus</th>
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
