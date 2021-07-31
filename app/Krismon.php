<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Krismon extends Model
{
    protected $fillable = ['product_name', 'price', 'stock', 'desc', 'image', 'category_id'];

    public function Category()
    {
        return $this->belongsTo(\App\Category::class, 'category_id');
    }
}
