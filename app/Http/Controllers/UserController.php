<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Session;
use App\User;
use Auth;



class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }
    protected function validator(array $user)
    {
        return Validator::make($user, [
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'gambar' => ['required', 'string', 'max:255','nullable:users'],
        ]);
    }
    
    public function index()
    {
        $users = User::all();
        return view('auth.index', compact('users','users'));
    }

    protected function create()
    {
        return view('auth.create');
    }

    
    public function store(Request $request)
    {
        
        $user = new User([
            'nama' => ucwords($request->get('nama')),
            'email' => $request->get('email'),
            'password' => bcrypt($request->input('password')),
            'role' => $request->get('role')
        ]);
        $user->save();
        return redirect('user')->with('success', 'Data Petugas berhasil ditambahkan ');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view ('auth.edit', compact('users','users'));
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required|string',
            'email'    => 'required|string|email',
            'password' => 'required|confirmed|min:6|string',
        ]);

        $update = User::findOrFail($id);
        $update->update([
            'nama' => ucwords($request->get('nama')),
            'email' => $request->get('email'),
            'password' => bcrypt($request->input('password'))
        ]);
            
       return back()->with('update','Profil berhasil diperbarui');   
    
    }

    
    public function destroy($id)
    {
        
        if(Auth::user()->id != $id) {
            $del = User::findOrFail($id);
            $del->delete();
            Session::flash('delete', 'Berhasil dihapus!');
        } else {
            Session::flash('delete', 'Akun anda sendiri tidak bisa dihapus!');
        }
        return redirect()->to('user');
    }
}

