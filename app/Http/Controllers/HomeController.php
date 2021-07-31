<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index');
    }

    public function laporan()
    {
        return view('admin.laporanpembelian');
    }

    public function belumbayar()
    {
        return view('admin.pembelianbelumbayar');
    }

    public function sudahbayar()
    {
        return view('admin.pembeliansudahbayar');
    }

    public function pembelianbatal()
    {
        return view('admin.pembelianbatal');
    }
}
