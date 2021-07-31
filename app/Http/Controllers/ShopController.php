<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Krismon;
use App\Category;

class ShopController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Krismon::paginate(4);
        return view('shop.index',compact('categories', 'products', 'id'));
    }

    public function show($id)
    {
        $products = Krismon::findOrFail($id);
        return view('shop.detail', compact('products'));
    }
}
