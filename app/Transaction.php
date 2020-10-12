<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $fillable = [
        'tanggal_pinjam', 
        'tanggal_kembali', 
        'denda',
        'tahun_ajaran', 
        'semester', 
        'status',
        'books_id',
        'members_id'

    ];

    public function books()
    {
        return $this->belongsTo('App\Book');
    }

    public function members()
    {
        return $this->belongsTo('App\Member');
    }
    public function statues()
    {
        return $this->belongsTo('App\Status');
    }
}
