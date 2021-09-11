<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
