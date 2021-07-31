<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Krismon;
use App\Category;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function home()
    // {
    //     return view('index');
    // }

    public function create()
    {
        $categories = Category::all();
        return view('admin.createproduct',compact('categories'));
    }

    public function store(Request $request) //memasukan data ke database
    {

        $request->validate([
            'product_name' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'desc' => 'required',
            'category_id' => 'required',
            
        ]);

        $jp = $request->image;
        $image = time().rand(100,99).".".$jp->getClientOriginalName();

        $dtUpload = new Krismon;
        $dtUpload->product_name = $request->product_name;
        $dtUpload->price = $request->price;
        $dtUpload->stock = $request->stock;
        $dtUpload->desc = $request->desc;
        $dtUpload->category_id = $request->category_id;
        $dtUpload->image =$image;

        $jp->move(public_path().'/img', $image);
        $dtUpload->save();

    return redirect('/view');
        
    }

    public function viewProduct()
    {
        $krismons = Krismon::all();
        return view('admin.product', compact('krismons'));
    }

    public function edit($id)
    {
        $categories = Category::findOrFail($id)->get();
        $krismon = Krismon::findorfail($id);
        return view('admin.editproduct', compact('krismon', 'categories'));
    }

    public function update(Request $request, $id)
    {
       $ubah = Krismon::findorfail($id);
       $namaawal = $ubah->image;

       $data = [
           'product_name' => $request->product_name,
           'price' => $request->price,
           'stock' => $request->stock,
           'desc' => $request->desc,
           'category_id' => $request->category_id,
           'image' => $namaawal,
       ];

       $request->image->move(public_path().'/img', $namaawal);
       $ubah->update($data);

        return redirect('/view');
    }

    public function delete($id)
    {
        Krismon::destroy($id);
        return back();
    }
}
