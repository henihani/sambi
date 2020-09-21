<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    protected $fillable = [
        'nomor_anggota', 
        'nama', 
        'nomor_identitas',
        'jabatan',
        'jurusan_gurumapel', 
        'kelas', 
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'foto'
    ];
    

    public function visitors()
    {
        return $this->hasMany('App\Visitor');
    }
    
    public function transctions()
    {
        return $this->hasMany('App\Trasaction');
    }
}
