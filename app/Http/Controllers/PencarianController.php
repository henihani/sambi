<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;

class PencarianController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view ('layouts.pencarian',compact('books','books'));
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$books = DB::table('books')
        ->where('pengarang','like',"%".$cari."%")
        ->orWhere('judul','like',"%".$cari."%")
        ->orWhere('penerbit','like',"%".$cari."%")
        ->orWhere('kelas','like',"%".$cari."%")
        ->orWhere('semester','like',"%".$cari."%")
		->get();
 
    		// mengirim data pegawai ke view index
        return view('layouts.pencarian',['books' => $books]);
    }
}
