<?php

namespace App\Http\Controllers;

use DB;
use App\Book;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //validasi data
    protected function validator(array $books)
    {
        return Validator::make($books,[
        'inventaris' => ['required','unique:books'],
        'tanggal_terima' => ['required'],
        'judul' => ['required'],
        'pengarang' => ['required'],
        'penerbit' => ['required'],
        'tahun_terbit' => ['required','numeric'],
        'semester' => ['required'],
        'kelas' => ['required'],
        'asal' => ['required'],
        'harga' => ['required'],
        'isbn' => ['required'],
        'categories_id' => ['required'],
        'callnumber' => ['required'],
        'lokasi' => ['required']
        ]);

    }

    //laman utama pada data buku
    public function index()
    {
        $books = Book::all();
        return view ('layouts.book.index',compact('books','books'));
    }

    //laman pembuatan data
    public function create()
    {
        $category = Category::all();
        return view('layouts.book.create',compact('category','category'));
    

    }

    //menyimpan input data
    public function store(Request $request)
    {
        $request->validate([
            'sampul' => 'mimes:jpeg,png,jpg|max:2048',
            ]);
        $imgName = $request->sampul->getClientOriginalName(). '-'. time()
                                     . '.' . $request->sampul->extension();
        $request->sampul->move(public_path('image/books'),$imgName);

        $book = New Book([
            'inventaris' => $request->get('inventaris'),
            'tanggal_terima' => $request->get('tanggal_terima'),
            'judul' => ucwords($request->get('judul')),
            'pengarang' => ucwords($request->get('pengarang')),
            'penerbit' => ucwords($request->get('penerbit')),
            'tahun_terbit' => $request->get('tahun_terbit'),
            'semester' => $request->get('semester'),
            'kelas' => $request->get('kelas'),
            'asal' => ucwords($request->get('asal')),
            'harga' => $request->get('harga'),
            'isbn' => $request->get('isbn'),
            'categories_id' => $request->get('categories_id'),
            'callnumber' => $request->get('callnumber'),
            'lokasi' => ucwords($request->get('lokasi')),
            'deskripsi' => $request->get('deskripsi'),
            'sampul' => $imgName
        ]);
        
        $book->save();
        return redirect('book')->with('success','Buku baru berhasil ditambahkan!');
        
        
    }
  
    //menzmpilkan data detail buku
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('layouts.book.show', compact('book'));
        
    }

    //menampilkan laman edit buku
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('layouts.book.edit', compact('book'));
    }

    //memperbarui data buku
    public function update(Request $request, $id)
    {
        $update = Book::findOrFail($id);
        $update->update([
            'inventaris' => $request->get('inventaris'),
            'tanggal_terima' => $request->get('tanggal_terima'),
            'judul' => ucwords($request->get('judul')),
            'pengarang' => ucwords($request->get('pengarang')),
            'penerbit' => ucwords($request->get('penerbit')),
            'tahun_terbit' => $request->get('tahun_terbit'),
            'semester' => $request->get('semester'),
            'kelas' => $request->get('kelas'),
            'asal' => ucwords($request->get('asal')),
            'harga' => $request->get('harga'),
            'isbn' => $request->get('isbn'),
            'categories_id' => $request->get('categories_id'),
            'callnumber' => $request->get('callnumber'),
            'lokasi' => ucwords($request->get('lokasi'))
            ]);
       $update->update();     
       return redirect('book')->with('update','Data buku berhasil diperbarui!');
    }

    //menghapus data buku
    public function destroy($id)
    {
        $del = Book::find($id);
        $del->delete();
        return back()->with('delete', 'Data buku berhasil dihapus');
    }


    //LAPORAN
    public function bookReport()
    {
        return view('layouts.book.book');
    }
}
