<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Member;
use App\Book;
use App\Status;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
        $this->validate($request, [
            'members_id' => 'required',
            'books_id' => 'required',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date',
        ]);
        $transaction = new Transaction([
            'members_id' => $request->get('members_id'),
            'books_id' => $request->get('books_id'),
            'tanggal_pinjam' => $request->get('tanggal_pinjam'),
            'tanggal_kembali' => $request->get('tanggal_kembali'),
            'status' => 'Pinjam'
        ]);

        $transaction->save();
        $status = new Status([
            'books_id' => $request->get('books_id'),
            'transactions_id' => $transaction->id
        ]);
        $status->save();
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
        if ($transactions->status !== 'Pinjam') {
            abort(403);
        }
        return view('layouts.transaction.edit', compact('transactions'));
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tanggal_kembali' => 'required|date',
        ]);

        $update = Transaction::findOrFail($id);

        $update->update([
            'denda' => $request->get('denda'),
            'tanggal_kembali' => $request->get('tanggal_kembali'),
            'status' => 'Kembali'
        ]);

        $statusDel = Status::where('transactions_id', $update->id)->first();

        $update->update();
        $statusDel->delete();
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
        return back()->with('delete', 'Data transaksi berhasil dihapus');
    }

    //LAPORAN
    public function transactionReport()
    {
        return view ('layouts.transaction.transaction');
    }

}
