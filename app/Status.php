<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statuses';

    protected $fillable = ['books_id', 'transactions_id'];

    public function books()
    {
        return $this->hasMany('App\Book');
    }

    public function transctions()
    {
        return $this->hasMany('App\Trasaction');
    }
}
