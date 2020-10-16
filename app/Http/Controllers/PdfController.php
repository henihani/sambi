<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Transaction;

class PdfController extends Controller
{
    public function index()
    {
        return view('layouts.pdf');
        
    }
    public function cetak_pdf()
    {
    	
        $transactions = Transaction::all();
    	$pdf = PDF::loadview('layouts.cetakpdf',compact('transactions','transactions'))->setPaper('a4', 'potrait');
    	return $pdf->download('laporan_peminjaman_'.date('Y-m-d_H-i-s').'.pdf');
    }

    public function cetak()
    {
        
        $transactions = Transaction::all();
        return view('layouts.cetakpdf',compact('transactions','transactions'));
        
    }
    
}
