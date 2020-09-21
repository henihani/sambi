@extends('layouts.tamplate.master')
@section('title','edit member')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <section class="content-header">
        <h1>Edit Data Anggota</h1>
      </section>
    </div>
  </div>
    <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Data Anggota</h3>
          </div>
          <!-- form start -->
          <form action="{{ route('member.update',$members->id) }}" method="POST">
          @csrf
          {{ method_field('PUT') }}
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Nomor Anggota</label>
                    <input type="text" class="form-control" name="nomor_anggota" value="{{ $members->nomor_anggota }}" placeholder="Masukkan Nomor Anggota">
                  </div>
                  <div class="form-group">
                    <label>Nama Anggota</label>
                    <input type="text" class="form-control" name="nama" value="{{ $members->nama }}">
                  </div>
                  <div class="form-group">
                    <label>NIK/NISN</label>
                    <input type="text" class="form-control" name="nomor_identitas" value="{{ $members->nomor_identitas }}">
                  </div>
                  <div class="form-group">
                    <label>Jabatan</label>
                    <select class="form-control" name="jabatan" style="width: 100%;">
                      <option selected="selected" value="Guru" {{$members->jabatan === "Guru" ? "selected" : ""}}>Guru</option>
                      <option value="Siswa" {{$members->jabatan === "Siswa" ? "selected" : ""}}>Siswa</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Jurusan / Guru Mapel</label>
                    <input type="text" class="form-control" name="jurusan_gurumapel" value="{{ $members->jurusan_gurumapel }}">
                  </div>
                  <div class="form-group">
                    <label>Kelas</label>
                    <select class="form-control" name="kelas" style="width: 100%;">
                      <option selected="selected" value="-" {{$members->kelas === "-" ? "selected" : ""}}>-</option>
                      <option value="X" {{$members->kelas === "X" ? "selected" : ""}}>X</option>
                      <option value="XI" {{$members->kelas === "XI" ? "selected" : ""}}>XI</option>
                      <option value="XII" {{$members->kelas === "XII" ? "selected" : ""}}>XII</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin" style="width: 100%;">
                      <option selected="selected" value="laki-laki" {{$members->jenis_kelamin === "laki-laki" ? "selected" : ""}}>Laki-laki</option>
                      <option value="perempuan" {{$members->jenis_kelamin === "perempuan" ? "selected" : ""}}>Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" value="{{ $members->tempat_lahir }}">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $members->tanggal_lahir }}">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{ $members->alamat }}">
                  </div>
                  <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control" name="foto">
                  </div>  
                </div>
              </div>
                  <!-- /.row -->
            </div>
                <!-- /.box-body -->
            <div class="box-footer">
                <div class="row">
                  <div class="col-md-4"></div>
                  <button type="submit" class="btn btn-primary">Perbarui</button>&nbsp;&nbsp;&nbsp;
                @if($members->jabatan ==='Siswa')
                  <a href="{{ url('member/siswa') }}" class="btn btn-default">Kembali</a>
                @else($members->jabatan ==='Guru')
                  <a href="{{ url('member/guru') }}" class="btn btn-default">Kembali</a>
                @endif
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