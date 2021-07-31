<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function Krismon()
    {
        return $this->hasMany('\App\Krismon', 'category_id', 'id');
    }
}
