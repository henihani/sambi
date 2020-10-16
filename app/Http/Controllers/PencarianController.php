<?php

namespace App\Http\Controllers;

use App\Book;
use App\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PencarianController extends Controller
{
    public function index()
    {
        $books = Book::all();
        //$books = Book::whereNotIn('id', Status::select('books_id')->get())->get();
        return view('layouts.pencarian', compact('books', 'books'));
        
    }
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table books sesuai pencarian data
        $books = DB::table('books')
            ->where('pengarang', 'like', "%" . $cari . "%")
            ->orWhere('judul', 'like', "%" . $cari . "%")
            ->orWhere('penerbit', 'like', "%" . $cari . "%")
            ->orWhere('kelas', 'like', "%" . $cari . "%")
            ->orWhere('semester', 'like', "%" . $cari . "%")
            ->orWhere('isbn', 'like', "%" . $cari . "%")
            ->get();

        // mengirim data books ke view index
        return view('layouts.pencarian', ['books' => $books]);
    }
}
