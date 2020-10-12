<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statues';
    

    public function books()
    {
        return $this->hasMany('App\Book');
    }
    
    public function transctions()
    {
        return $this->hasMany('App\Trasaction');
    }
}
