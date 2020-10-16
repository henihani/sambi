<?php

namespace App\Http\Controllers;
use App\Transaction;
use App\Member;
use App\Book;
use App\Status;
use App\Visitor;

use PDF;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    //LAPORAN TRANSACTION
    
    public function cetakTransaksi()
    {
        $transactions = Transaction::all();
        return view('layouts.laporan.cetaktransaksi',compact('transactions','transactions'));
    }
    public function laporanTransaksi()
    {
        return view ('layouts.laporan.laporanTransaction');
    }

    public function transaksiPdf(Request $request)
    {
        $transactions = Transaction::all();
    	$pdf = PDF::loadview('layouts.laporan.cetaktransaksi',compact('transactions','transactions'))->setPaper('a4', 'potrait');
    	return $pdf->download('laporan_peminjaman_'.date('Y-m-d_H-i-s').'.pdf');
    }

    //LAPORAN BUKU
    public function cetakBuku()
    {
        $books = Book::all();
        return view ('layouts.laporan.cetakbuku',compact('books','books'));
    }
    
    public function laporanBuku()
    {
        return view ('layouts.laporan.laporanBuku');
    }
    
    public function bukuPdf(Request $request)
    {
        $books = Book::all();
    	$pdf = PDF::loadview('layouts.laporan.cetakbuku',compact('books','books'))->setPaper('a4', 'landscape');
    	return $pdf->download('laporan_buku_'.date('Y-m-d_H-i-s').'.pdf');
    
    }

    //LAPORAN ANGGOTA
    public function cetakAnggota()
    {
        $members = Member::all();
        return view('layouts.laporan.cetakanggota', compact('members','members'));
    }
    
    public function laporanAnggota()
    {
        return view ('layouts.laporan.laporanAnggota');
    }
    
    public function anggotaPdf(Request $request)
    {
        $members = Member::all();
    	$pdf = PDF::loadview('layouts.laporan.cetakanggota',compact('members','members'))->setPaper('a4', 'landscape');
    	return $pdf->download('laporan_Anggota_'.date('Y-m-d_H-i-s').'.pdf');
    
    }

    //LAPORAN PENGUNJUNG
    public function cetakPengunjung()
    {
        $visitors = Visitor ::all();
        return view('layouts.laporan.cetakpengunjung', compact('visitors','visitors'));
    }
    
    public function laporanPengunjung()
    {
        return view ('layouts.laporan.laporanPengunjung');
    }
    
    public function pengunjungPdf(Request $request)
    {
        $visitors = Visitor::all();
    	$pdf = PDF::loadview('layouts.laporan.cetakpengunjung',compact('visitors','visitors'))->setPaper('a4', 'potrait');
    	return $pdf->download('laporan_Pengunjung_'.date('Y-m-d_H-i-s').'.pdf');
    
    }

   
    
}
