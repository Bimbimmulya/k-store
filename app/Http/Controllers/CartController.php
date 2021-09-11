<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Cart;
use App\Krismon;

class CartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        return view('shop.cart', compact('carts'));
    }

    public function store(Request $request)
    {
        $duplicate = Cart::where('krismon_id', $request->krismon_id)->first();

        if($duplicate){
            return redirect('/cart')->with('error', 'Barang sudah ada di Cart!');
        }

        Cart::create([
            'user_id' => Auth::user()->id,
            'krismon_id' => $request->krismon_id,
            'qty' => 1
        ]);

        return redirect('/cart')->with('success', 'Berhasil menambah Barang di Cart!');
    }

    public function update(Request $request, $id)
    {
        Cart::where('id', $id)->update([
            'qty' => $request->quantity
        ]);
        return response()->json([
            'success' => true
        ]);
    }

    public function remove($id)
    {
        Cart::destroy($id);
        return back();
    }
}
