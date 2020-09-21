<?php

namespace App\Http\Controllers;

use App\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Member;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitors = Visitor::all();
        return view ('layouts.visitor.index', compact('visitors','visitors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $member = Member::all();
        return view('layouts.visitor.create',compact('member','member'));
    }

    public function store(Request $request)
    {
        $visitor = new Visitor([
            'tanggal_kunjungan' => $request->get('tanggal_kunjungan'),
            'members_id' => $request->get('members_id')
        ]);
        
        $visitor->save();
        return redirect('visitor/create')->with('success','Pengunjung berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $visitors = Visitor::findOrFail($id);
        return view('layouts.visitor.show', compact('visitors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitor $visitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visitor $visitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Visitor::find($id);
        $del->delete();
        return back()->with('delete', 'Data anggota berhasil dihapus');
    }

    //LAporan VISITOR
    public function visitorReport()
    {
        return view ('layouts.visitor.visitor');
    }
}
