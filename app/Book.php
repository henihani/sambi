<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = [
        'inventaris', 
        'tanggal_terima', 
        'judul', 
        'pengarang', 
        'penerbit', 
        'tahun_terbit', 
        'semester', 
        'kelas',
        'asal',
        'harga', 
        'isbn', 
        'categories_id',
        'callnumber', 
        'lokasi'
    ];

    public function categories()
    {
        return $this->belongsTo('App\Category');
    }
    

    public function transactions()
    {
        return $this->hasMany('App\Transactions');
    }
}
