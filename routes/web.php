<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/users', function () {
    $ListUser = DB::table('users')->get();
    return view('admin/users/index');
});
Route::get('/categories', function(){
    $ListCate = DB::table('categories')->get();
    dd($ListCate);
});
Route::get('/products', function(){
    $ListProd = DB::table('products')->get();
    dd($ListProd);
});
Route::post('/admin/users', function(){
    dd($_REQUEST);
});
//view: trả ra view tương ứng với url
Route::view('/welcome', 'welcome');

/*
- mathch : mapping url với callback tương ứng, mapping theo nhiều phương thức http đã khai báo
- any: mapping url với callback tương ứng, mapping với tất cả phương thức http
 */