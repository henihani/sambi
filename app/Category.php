<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $fillable = [
        'kategori',
        'nomor_kategori'
    ];

    public function books()
    {
        return $this->hasMany('App\Book');
    }
}
