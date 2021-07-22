<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\DB;
use App\Models\User;

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
Route::get('/layout', function () {
    return view('layout');
});
//Người dùng

Route::group([
    //config
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin',
], function () {
    Route::group([
        'prefix' => 'users',
        'as' => 'users.'
    ], function () {
        Route::get('/', 'UserController@index')->name('index');
        Route::get('/{id}', 'UserController@show')->name('show');
        Route::get('create', 'UserController@create')->name('create');
        Route::post('store', 'UserController@store')->name('store');
        Route::get('edit/{id}', 'UserController@edit')->name('edit');
        Route::post('update/{id}', 'UserController@update')->name('update');
        Route::post('delete/{id}', 'UserController@delete')->name('delete');
    });
});

// //Danh mục 
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin'
], function () {
    Route::group([
        'prefix' => 'categories',
        'as'=> 'categories.'
    ], function(){
        Route::get('/', 'CateController@index')->name('index');
        Route::get('/create', 'CateController@create')->name('create');
        Route::post('/store', 'CateController@store')->name('store');
        Route::get('edit/{id}', 'CateController@edit')->name('edit');
        Route::post('update/{id}', 'CateController@update')->name('update');
        Route::post('delete/{id}', 'CateController@delete')->name('delete');
    });
});
// //Sản phẩm
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin'
], function () {
    Route::group([
        'prefix' => "products",
        'as' => "products."
    ], function () {
        Route::get('/', 'ProdController@index')->name('index');
        Route::get('/create', 'ProdController@create')->name('create');
        Route::post('/store', 'ProdController@store')->name('store');
        Route::get('/edit/{id}', 'ProdController@edit')->name('edit');
        Route::post('/update/{id}', 'ProdController@update')->name('update');
        Route::post('/delete/{id}', 'ProdController@delete')->name('delete');
    });
});




// /*
// - mathch : mapping url với callback tương ứng, mapping theo nhiều phương thức http đã khai báo
// - any: mapping url với callback tương ứng, mapping với tất cả phương thức http
//  */