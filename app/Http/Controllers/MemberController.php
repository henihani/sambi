<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Member;



class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    protected function validator(array $user)
    {
        return Validator::make($members, [
            'nomor_anggota' => ['required', 'unique:members'],
            'nama' => ['required', 'string'],
            'nomor_identitas' => ['required', 'unique:members'],
            'jabatan' => ['required', 'string'],
            'jurusan_gurumapel' => ['required', 'string'],
            'kelas' => ['required'],
            'jenis_kelamin' => ['required'],
            'tempat_lahir' => ['required', 'string'],
            'tanggal_lahir' => ['required'],
            'alamat' => ['required', 'string', 'max:255'],
            'foto' => ['required|image|mimes:jpeg,png,jpg|max:2048']
            
            ]);  
    }
    
    public function index()
    {
        abort(404);
    }

    public function memberGuru()
    {
        $members = Member::where('jabatan', 'Guru')->get();
        return view('layouts.member.index', compact('members','members'));
    }

    public function memberSiswa()
    {
        $members = Member::where('jabatan', 'Siswa')->get();
        return view('layouts.member.index', compact('members','members'));
    }
    
    
    public function create()
    {
        return view ('layouts.member.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'mimes:jpeg,png,jpg|max:2048',
            ]);
        $imgName = $request->foto->getClientOriginalName(). '-'. time()
                                     . '.' . $request->foto->extension();
        $request->foto->move(public_path('image/members'),$imgName);

        $member = new Member([
            'nomor_anggota' => $request->get('nomor_anggota'),
            'nama' => ucwords($request->get('nama')),
            'nomor_identitas' => $request->get('nomor_identitas'),
            'jabatan' => ucwords($request->get('jabatan')),
            'jurusan_gurumapel' => ucwords($request->get('jurusan_gurumapel')),
            'kelas' => $request->get('kelas'),
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'tempat_lahir' => ucwords($request->get('tempat_lahir')),
            'tanggal_lahir' => $request->get('tanggal_lahir'),
            'alamat' => ucwords($request->get('alamat')),
            'foto' => $imgName
        ]);

        $member->save();

        if ($member ->jabatan =='Siswa'){
            return redirect('/member/siswa')->with('success','Anggota baru berhasil ditambahkan!');
        }else{
            return redirect('/member/guru')->with('success','Anggota baru berhasil ditambahkan!');
        }
        
    }

    
    public function import(Request $request)
    {
        
        //
        
    }
    public function show($id)
    {
        $members = Member::findOrFail($id);
        return view('layouts.member.show', compact('members'));
        
    }

    
    public function edit($id)
    {
        $members = Member::findOrFail($id);
        return view('layouts.member.edit', compact('members'));
    }

    
    public function update(Request $request, $id)
    {
        $update = Member::findOrFail($id);

        $imgName = $request->foto->getClientOriginalName(). '-'. time()
                                     . '.' . $request->foto->extension();
        $request->foto->move(public_path('image/members'),$imgName);
        
        $update = Member::findOrFail($id);
        $update->update([
            'nomor_anggota' => $request->get('nomor_anggota'),
            'nama' => ucwords($request->get('nama')),
            'nomor_identitas' => $request->get('nomor_identitas'),
            'jabatan' => ucwords($request->get('jabatan')),
            'jurusan_gurumapel' => ucwords($request->get('jurusan_gurumapel')),
            'kelas' => $request->get('kelas'),
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'tempat_lahir' => ucwords($request->get('tempat_lahir')),
            'tanggal_lahir' => $request->get('tanggal_lahir'),
            'alamat' => ucwords($request->get('alamat')),
            'foto' => $imgName
        ]);

        $update->update(); 
        if ($update ->jabatan =='Siswa'){
           return redirect('/member/siswa')->with('update','Anggota baru berhasil ditambahkan!');
        }else{
            return redirect('/member/guru')->with('update','Anggota baru berhasil ditambahkan!');
        }    
    }


    public function destroy($id)
    {
        $del = Member::find($id);
        $del->delete();
        return back()->with('delete', 'Data anggota berhasil dihapus'); 
    }



    //LAPORAN
    public function memberReport()
    {
        return view ('layouts.member.member');
    }
}
