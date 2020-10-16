<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Data Peminjaman Perpustakaan SMK N 1 Sambi</h4>
		<br>
    </center>
 
	<table class='table table-bordered'>
    <thead>
        <tr>
            <th>No</th>
            <th>Nomor Identitas</th>
            <th>Nama</th>
            <th>Judul</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Kembali</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($transactions as $transaction)
            <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$transaction->members->nomor_identitas}}</td>
            <td>{{$transaction->members->nama}}</td>
            <td>{{$transaction->books->judul}}</td>
            <td>{{date('d/m/y', strtotime($transaction->tanggal_pinjam))}}</td>
            <td>{{date('d/m/y', strtotime($transaction->tanggal_kembali))}}</td>
            
            <td>
                @if($transaction->status == 'Pinjam')
                Pinjam
                @else
                Kembali
                @endif  
            </td>
            </tr> 
        @endforeach
        </tbody>
	</table>
</body>
</html>