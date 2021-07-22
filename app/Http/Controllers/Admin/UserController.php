<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {

        // Trước khi gọi tới quan hệ trong vòng for ==> Phải dùng EAGER LOADING


        //SELECT * FROM users;
        $ListUser = User::all();

       // SELECT * FROM invoices WHERE user_id IN (...);
       $ListUser->load(['invoices']);



        return view('admin/users/index', ['data' => $ListUser,]);
    }

    public function show($id)
    {
        // dd($id);

        $user = User::find($id);
        return view('admin/users/show', ['user' => $user,]);
    }

    public function create()
    {
        return view('admin/users/create');
    }

    public function store()
    {
        $data =  request()->except('_token');
        $data['password'] = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';

        $result = User::create($data);

        return redirect()->route('admin.users.index');
    }

    public function edit($id)
    {
        $data = User::find($id);
        return view('admin/users/edit', ['data' => $data,]);
    }

    public function update($id)
    {
        $data = request()->except('_token');
        $user = User::find($id);
        $user->update($data);


        return redirect()->route('admin.users.index');
    }

    public function delete($id)
    {
        $data = request()->except('_token');
        $user = User::find($id);
        $user->delete($data);
        return redirect()->route('admin.users.index');
    }
}
