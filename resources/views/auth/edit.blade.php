@extends('layouts.tamplate.master')
@section('title','edit profil')

@section('content')
<!-- Isi File siswa.php-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
      <h1>
        Edit Profil
      </h1>
      </div>
    </div>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <!-- Profile Image -->
          <div class="box box-primary">
          <form action="{{ route('user.update', $users->id) }}" method="POST">
            @csrf
            {{ method_field('PUT') }}
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{ asset('assets/dist/img/user4-128x128.jpg') }}" alt="User profile picture') }}">

              <h3 class="profile-username text-center">{{Auth::user()->nama}} - {{ Auth::user()->role }}</h3>

              <p class="text-muted text-center">Perpustakaan SMK N 1 Sambi</p>
              @if (session('update'))
              <div class="alert alert-info" role="alert">
              {{ session('update') }}
              </div>
            @endif
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{$users->nama}}" >
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="{{$users->email}}" >
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control"  name="password"  >
                  </div>
                </li>
              </ul>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Perbarui</button>&nbsp;&nbsp;&nbsp;
                <a href="/home" class="btn btn-default">Kembali</a>
              </div>
              </div>
            <!-- /.box-body -->
          </div>
          </form>
          <!-- /.box -->

        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection