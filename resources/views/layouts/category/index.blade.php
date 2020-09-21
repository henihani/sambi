@extends('layouts.tamplate.master')
@section('title','kategori')

@section('content')
<!-- Isi File siswa.php-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kategori Buku
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- box -->
          <div class="box">
            <div class="box-header"> 
            <div class="col-lg-2">
                <a href="{{ route('category.create') }}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Kategori</a>
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
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Nomor Kategori</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$category->kategori}}</td>
                    <td>{{$category->nomor_kategori}}</td>
                    <td>
                      <a href="{{ route('category.edit',$category->id) }}">
                        <button class="btn btn-primary" type="submit" name="delete">Edit</button>
                      </a>
                    </td>
                    <td>
                      <form action="{{ route('category.destroy',$category->id ) }}" method="POST">
                        @csrf
                        <button class="btn btn-danger" type="submit" name="delete" onclick="javascript: return confirm('Hapus kategori {{$category->kategori}}')">Hapus</button>
                        <input type="hidden" name="_method" value="delete" >
                      </form>
                    </td>
                  </tr>  
                @endforeach 
                </tbody>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Nomor Kategori</th>
                    <th>Edit</th>    
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