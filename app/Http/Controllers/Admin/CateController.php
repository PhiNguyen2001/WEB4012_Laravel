<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CateController extends Controller
{
    public function index()
    {
        $ListCate = Category::all();

        $ListCate->load(['products']);
        
        return view('admin/categories/index', ['data' => $ListCate,]);
    }

    public function show()
    {
    }

    public function create()
    {
        return view('admin/categories/create');
    }

    public function store()
    {
        $data =  request()->except('_token');
        

        $result = Category::create($data);

        return redirect()->route('admin.categories.index');
    }

    public function edit($id)
    {
        $data = Category::find($id);
        return view('admin/categories/edit', ['data' => $data,]);
    }

    public function update($id)
    {
        $data = request()->except('_token');
        $Category = Category::find($id);
        $Category->update($data);


        return redirect()->route('admin.categories.index');
    }

    public function delete($id)
    {
        $data = request()->except('_token');
        $Category = Category::find($id);
        $Category->delete($data);
        return redirect()->route('admin.categories.index');
    }
}
