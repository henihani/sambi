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
          <form action="{{ route('member.update',$members->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          {{ method_field('PUT') }}
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group{{ $errors->has('nomor_anggota') ? ' is-invalid' : '' }}">
                    <label>Nomor Anggota</label>
                    <input type="text" class="form-control" name="nomor_anggota" value="{{ $members->nomor_anggota }}" placeholder="Masukkan Nomor Anggota">
                    @if ($errors->has('nomor_anggota'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nomor_anggota') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('nama') ? ' is-invalid' : '' }}">
                    <label>Nama Anggota</label>
                    <input type="text" class="form-control" name="nama" value="{{ $members->nama }}">
                    @if ($errors->has('nama'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nama') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('nomor_identitas') ? ' is-invalid' : '' }}">
                    <label>NIK/NISN</label>
                    <input type="text" class="form-control" name="nomor_identitas" value="{{ $members->nomor_identitas }}">
                    @if ($errors->has('nomor_identitas'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nomor_identitas') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('jabatan') ? ' is-invalid' : '' }}">
                    <label>Jabatan</label>
                    <select class="form-control" name="jabatan" style="width: 100%;">
                      <option selected="selected" value="Guru" {{$members->jabatan === "Guru" ? "selected" : ""}}>Guru</option>
                      <option value="Siswa" {{$members->jabatan === "Siswa" ? "selected" : ""}}>Siswa</option>
                    </select>
                    @if ($errors->has('jabatan'))
                    <span class="help-block">
                        <strong>{{ $errors->first('jabatan') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('jurusan_gurumapel') ? ' is-invalid' : '' }}">
                    <label>Jurusan / Guru Mapel</label>
                    <input type="text" class="form-control" name="jurusan_gurumapel" value="{{ $members->jurusan_gurumapel }}">
                    @if ($errors->has('jurusan_gurumapel'))
                    <span class="help-block">
                        <strong>{{ $errors->first('jurusan_gurumapel') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('kelas') ? ' is-invalid' : '' }}">
                    <label>Kelas</label>
                    <select class="form-control" name="kelas" style="width: 100%;">
                      <option selected="selected" value="-" {{$members->kelas === "-" ? "selected" : ""}}>-</option>
                      <option value="X" {{$members->kelas === "X" ? "selected" : ""}}>X</option>
                      <option value="XI" {{$members->kelas === "XI" ? "selected" : ""}}>XI</option>
                      <option value="XII" {{$members->kelas === "XII" ? "selected" : ""}}>XII</option>
                    </select>
                    @if ($errors->has('kelas'))
                    <span class="help-block">
                        <strong>{{ $errors->first('kelas') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('jenis_kelamin') ? ' is-invalid' : '' }}">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin" style="width: 100%;">
                      <option selected="selected" value="laki-laki" {{$members->jenis_kelamin === "laki-laki" ? "selected" : ""}}>Laki-laki</option>
                      <option value="perempuan" {{$members->jenis_kelamin === "perempuan" ? "selected" : ""}}>Perempuan</option>
                    </select>
                    @if ($errors->has('jenis_kelamin'))
                    <span class="help-block">
                        <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('tempat_lahir') ? ' is-invalid' : '' }}">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" value="{{ $members->tempat_lahir }}">
                    @if ($errors->has('tempat_lahir'))
                    <span class="help-block">
                        <strong>{{ $errors->first('tempat_lahir') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('tanggal_lahir') ? ' is-invalid' : '' }}">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $members->tanggal_lahir }}">
                    @if ($errors->has('tanggal_lahir'))
                    <span class="help-block">
                        <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('alamat') ? ' is-invalid' : '' }}">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{ $members->alamat }}">
                    @if ($errors->has('alamat'))
                    <span class="help-block">
                        <strong>{{ $errors->first('alamat') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('foto') ? ' is-invalid' : '' }}">
                    <label for="foto">Foto</label>
                    <img width="120px" height="160" src="/image/members/{{ $members->foto }}"> 
                    <input type="file" class="form-control" name="foto" >
                    <input type="hidden" name="fotobackup" value="{{$members->foto}}">
                    @if ($errors->has('foto'))
                    <span class="help-block">
                        <strong>{{ $errors->first('foto') }}</strong>
                    </span>
                    @endif
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