<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProdController extends Controller
{
    public function index()
    {
        $ListProd = Product::all();
        $ListProd->load(['category']);
        return view('admin/products/index', ['data' => $ListProd,]);
    }

    public function show()
    {
    }

    public function create()
    {
        $listCate = Category::all();
        return view('admin.products.create', ['listCate'=>$listCate]);
    }

    public function store()
    {
        $data =  request()->except('_token');
     

        $result = Product::create($data);

        return redirect()->route('admin.products.index');
    }

    public function edit($id)
    {
        $data = Product::find($id);
        $listCate = Category::all();
        return view('admin.products.edit', ['data'=>$data, 'listCate'=>$listCate]);
    }

    public function update($id)
    {
        $data = request()->except('_token');
        $product = Product::find($id);
        $product->update($data);


        return redirect()->route('admin.products.index');
    }

    public function delete($id)
    {
        $data = request()->except('_token');
        $product = Product::find($id);
        $product->delete($data);
        return redirect()->route('admin.products.index');
    }
}
