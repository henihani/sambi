@extends('layouts.tamplate.master')
@section('title','peminjaman')

@section('content')
<!-- Isi File siswa.php-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Peminjaman
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
                <a href="{{route('transaction.create')}}" class="btn btn-primary btn-rounded btn-fw" data-target="#tambahData"><i class="fa fa-plus"></i> &nbsp; Peminjaman</a>
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
              <div class="table-responsive" style="overflow: auto">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nomor Identitas</th>
                      <th>ISBN</th>
                      <th>Tanggal Peminjaman</th>
                      <th>Tanggal Kembali</th>
                      <th>Denda</th>
                      <th>Detail</th>
                      <th>Status</th>
                      <th>Pengembalian</th>
                      <th>Hapus</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($transactions as $transaction)
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$transaction->members->nomor_identitas}}</td>
                        <td>{{$transaction->books->isbn}}</td>
                        <td>{{date('d/m/y', strtotime($transaction->tanggal_pinjam))}}</td>
                        <td>{{date('d/m/y', strtotime($transaction->tanggal_kembali))}}</td>
                        <td>{{$transaction->denda}}</td>
                        <td>
                          <a href="{{route('transaction.show', $transaction->id)}}">
                          <button class="btn btn-block btn-warning" type="submit" name="">Detail</button>
                          </a>
                        </td>
                        <td>
                          @if($transaction->status == 'Pinjam')
                            <button class="btn btn-warning btn-xs">Pinjam</button>
                          @else
                            <label class="btn btn-success btn-xs">Kembali</label>
                          @endif  
                        </td>
                        <td>
                          <a href="{{ route('transaction.edit',$transaction->id) }}">
                            <button class="btn btn-block btn-default" type="submit" name="">Pengembalian</button>
                          </a>
                        </td>
                        <td>
                        <form action="{{route('transaction.destroy', $transaction->id) }}" method="POST">
                        @csrf
                          <button class="btn btn-danger" type="submit" name="delete" onclick="javascript: return confirm('Hapus data dengan {{$transaction->members->nomor_identitas}} ')">Hapus</button>
                          <input type="hidden" name="_method" value="delete" >
                        </form>
                        </td>
                      </tr> 
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nomor Identitas</th>
                      <th>ISBN</th>
                      <th>Tanggal Peminjaman</th>
                      <th>Tanggal Kembali</th>
                      <th>Denda</th>
                      <th>Detail</th>
                      <th>Status</th>
                      <th>Pengembalian</th>
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
