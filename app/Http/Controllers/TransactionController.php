<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Member;
use App\Book;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    protected function validator(array $user)
    {
        return Validator::make($transaction, [
            'tanggal_pinjam' => ['required'],
            'tanggal_kembali' => ['required'],
            'denda' => ['required'],
            'tahun_ajaran' => ['required'],
            'semester' => ['required'],
            'members_id' => ['required','string'],
            'books_id' => ['required','string'],
            'status' => ['required']
            ]);  
    }
    public function index()
    {
        $transactions = Transaction::all();
        return view('layouts.transaction.index',compact('transactions','transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::all();
        $members = Member::all();
        return view('layouts.transaction.create',compact('books','members'));
        
    }

    
    public function store(Request $request)
    {
        $transaction = new Transaction([
            'members_id' => $request->get('members_id'),
            'books_id' => $request->get('books_id'),
            'tanggal_pinjam' => $request->get('tanggal_pinjam'),
            'tanggal_kembali' => $request->get('tanggal_kembali'),
            'status' => 'Pinjam'
        ]);

        $transaction->save();
        return redirect('transaction')->with('success','Transaksi baru berhasil ditambahkan!');
        
    }

    
    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('layouts.transaction.show', compact('transaction'));
    }

    
    public function edit($id)
    {
        $transactions = Transaction::findOrFail($id);
        return view('layouts.transaction.edit', compact('transactions'));
    }

    
    public function update(Request $request, $id)
    {
        $update = Transaction::findOrFail($id);
        $update->update([
            'denda' => $request->get('denda'),
            'tanggal_kembali' => $request->get('tanggal_kembali'),
            'status' => $request->get('status')
        ]);

        $update->update(); 
        return redirect('/transaction')->with('update','Pengembalian buku berhasil');
        
    }

    public function transactionDenda()
    {
        $transactions = Transaction::where('denda', '>' ,0)->get();
        return view('layouts.transaction.index',compact('transactions','transactions'));
    }

    public function denda($id)
    {
        $transactions = Transaction::findOrFail($id);
        return view('layouts.transaction.denda', compact('transactions'));
    }

    public function bayarDenda(Request $request, $id)
    {
        $update = Transaction::findOrFail($id);
        $update->update([
            'denda' => $request->get('denda')
        ]);

        $update->update(); 
        return redirect('/transaction')->with('update','Pembayaran denda berhasil');
    }
    
    public function destroy($id)
    {
        $del = Transaction::find($id);
        $del->delete();
        return back()->with('delete', 'Data buku berhasil dihapus');
    }

    //LAPORAN
    public function transactionReport()
    {
        return view ('layouts.transaction.transaction');
    }

}
