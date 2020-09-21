<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Book;
use App\Member;
use App\Transaction;
use App\Visitor;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $books = Book::get();
       $members = Member::get();
       $transactions = Transaction::get();
       $visitors = Visitor::get();
       
        return view('layouts.dashboard',compact('books', 'members', 'transactions', 'visitors'));
    }
}

