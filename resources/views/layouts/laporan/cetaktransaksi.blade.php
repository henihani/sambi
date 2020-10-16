<html>
<head>
	<title>cetak transaksi</title>
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
		<h5>Laporan Data Peminjaman Perpustakaan SMK N 1 Sambi</h4>
		<br>
    </center>
 
	<table class='table table-bordered'>
    <thead>
        <tr>
            <th align="center">No</th>
            <th align="center">Nomor Identitas</th>
            <th align="center">Nama</th>
            <th align="center">Judul</th>
            <th align="center">Tanggal Peminjaman</th>
            <th align="center">Tanggal Kembali</th>
            <th align="center">Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($transactions as $transaction)
            <tr>
            <td align="center">{{$loop->iteration}}</td>
            <td align="center">{{$transaction->members->nomor_identitas}}</td>
            <td align="center">{{$transaction->members->nama}}</td>
            <td align="center">{{$transaction->books->judul}}</td>
            <td align="center">{{date('d/m/y', strtotime($transaction->tanggal_pinjam))}}</td>
            <td align="center">{{date('d/m/y', strtotime($transaction->tanggal_kembali))}}</td>
            
            <td align="center">
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