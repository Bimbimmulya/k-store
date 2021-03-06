<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Cart;
use App\Transaction;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function index()
    // {
    //     return view('shop.checkout');
    // }

    public function store()
   {
    $carts = Cart::where('user_id', Auth::user()->id);

    $cartUser = $carts->get();

    $transaction = Transaction::create([
        'user_id' => Auth::user()->id
    ]);

    foreach ($cartUser as $cart) {
        $transaction->detail()->create([
            'krismon_id' => $cart->krismon_id,
            'qty' => $cart->qty
        ]);

        $carts->Delete();
        return redirect('/index');
       }
   } 
}
