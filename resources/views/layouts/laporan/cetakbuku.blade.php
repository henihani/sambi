<html>
<head>
	<title>cetak buku</title>
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
		<h5>Laporan Data Buku Perpustakaan SMK N 1 Sambi</h4>
		<br>
    </center>
 
	<table class='table table-bordered' border="1">
        <thead>
            <tr>
              <th align="center">No</th>
              <th align="center">Inventaris</th>
              <th align="center">ISBN</th>
              <th align="center">Judul</th>
              <th align="center">Pengarang</th>
              <th align="center">Penerbit</th>
              <th align="center">Tahun Terbit</th>
              <th align="center">Semester</th> 
              <th align="center">Kelas</th>
              <th align="center">Asal</th>
              <th align="center">Harga</th>
              <th align="center">Callnumber</th>
              <th align="center">Kategori</th>
              <th align="center">Lokasi</th>
            </tr>
          </thead>
          <tbody>
          @foreach($books as $book)
            <tr>
              <td align="center">{{ $loop->iteration }}</td>
              <td align="center">{{$book->inventaris}}</td>   
              <td align="center">{{$book->isbn}}</td>     
              <td align="center">{{$book->judul}}</td>
              <td align="center">{{$book->pengarang}}</td>   
              <td align="center">{{$book->penerbit}}</td>   
              <td align="center">{{$book->tahun_terbit}}</td>
              <td align="center">{{$book->semester}}</td>
              <td align="center">{{$book->kelas}}</td>   
              <td align="center">{{$book->asal}}</td>   
              <td align="center">{{$book->harga}}</td>   
              <td align="center">{{$book->callnumber}}</td>   
              <td align="center">{{$book->categories->kategori}}</td>   
              <td align="center">{{$book->lokasi}}</td>   
            </tr> 
          @endforeach
          </tbody>
        </table>
</body>
</html>