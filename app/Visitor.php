<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $table = 'visitors';
    protected $fillable = [
        'tanggal_kunjungan','members_id'
    ];

    public function members()
    {
        return $this->belongsTo('App\Member');
    }
}
