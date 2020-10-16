<html>
<head>
	<title>cetak anggota</title>
	{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
</head>
<style>
    table {
  border-collapse: collapse;
}
    table, th, td {
        padding: 2px;
        align: center;
        border: 1px solid black;
}
</style>
<body>
	<center>
		<h5>Laporan Data Anggota Perpustakaan SMK N 1 Sambi</h4>
		<br>
    </center>
 
	<table class='table table-bordered' border="1">
        <thead>
            <tr>
              <th align="center">No</th>
              <th align="center">Nomor Anggota</th>
              <th align="center">Nama</th>
              <th align="center">NIK/NISN</th>
              <th align="center">Jabatan</th>
              <th align="center">Jurusan/Guru Mapel</th>
              <th align="center">Kelas</th>
              <th align="center">Jenis Kelamin</th>
              <th align="center">TTL</th>
              <th align="center">Alamat</th>
              <th align="center">Foto</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($members as $member)
            <tr>
              <td align="center">{{$loop->iteration}}</td>
              <td align="center">{{$member->nomor_anggota}}</td>
              <td align="center">{{$member->nama}}</td>
              <td align="center">{{$member->nomor_identitas}}</td>
              <td align="center">{{$member->jabatan}}</td>
              <td align="center">{{$member->jurusan_gurumapel}}</td>
              <td align="center">{{$member->kelas}}</td>
              <td align="center">{{$member->jenis_kelamin}}</td>
              <td align="center">{{$member->tempat_lahir}}, {{$member->tanggal_lahir}}</td>
              <td align="center">{{$member->alamat}}</td>
              <td align="center"><img width="120" height="160" src="/image/members/{{ $member->foto }}"> </td>
              
            </tr>
            @endforeach
          </tbody>
          <tfoot>
        </table>
</body>
</html>