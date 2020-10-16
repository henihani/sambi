<html>
<head>
	<title>cetak pengunjung</title>
	{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
</head>
<style>
    table {
  border-collapse: collapse;
}
    table, th, td {
        padding: 2px;
        border: 1px solid black;
}
</style>
<body>
	<center>
		<h5>Laporan Data Pengunjung Perpustakaan SMK N 1 Sambi</h4>
		<br>
    </center>
 
	<table class='table table-bordered' border="1">
        <thead>
            <tr>
              <th align="center">No</th>
              <th align="center">Tanggal Kunjungan</th>
              <th align="center">Nomor Anggota</th>
              <th align="center">Nama</th>
              <th align="center">Jurusan / Guru Mapel</th>
              <th align="center">Kelas</th>
              <th align="center">Jabatan</th>
            </tr>
          </thead>
          <tbody>
            @foreach($visitors as $visitor)
                <tr>
                <td align="center">{{ $loop->iteration}}</td>
                <td align="center">{{ date('d/m/y', strtotime($visitor->tanggal_kunjungan))}}</td>
                <td align="center">{{ $visitor->members->nomor_anggota}}</td>
                <td align="center">{{ $visitor->members->nama}}</td>
                <td align="center">{{ $visitor->members->jurusan_gurumapel}}</td>
                <td align="center">{{ $visitor->members->kelas}}</td>
                <td align="center">{{ $visitor->members->jabatan}}</td>
                </tr> 
            @endforeach
          </tbody>
        </table>
</body>
</html>