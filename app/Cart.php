<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id', 'krismon_id', 'qty'];

    public function krismon()
    {
        return $this->belongsTo('App\Krismon', 'krismon_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
