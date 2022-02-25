<?php

use Illuminate\Support\Facades\Route;

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
// thuc hanh 1
Route::get('/', function () {
    echo "<h2>This is Home page</h2>";
});

Route::get('/about', function () {
    echo "<h2>This is About page</h2>";
});

Route::get('/contact', function () {
    echo "<h2>This is Contact page</h2>";
});



//Khi Routing thực thi thì nó có thể nhận và truyền các tham số
Route::get('/user', function () {
    return view('user', ['name'=>'Masud Alam']);
});


//truyền tham số trên thanh địa chỉ khi chạy web
Route::get('/user/{name}', function ($name) {
    echo "<h2>User name is $name</h2>";
});


//Tạo controller php artisan make:controller HomeController
// thực thi homeController
Route::get('/', 'App\Http\Controllers\HomeController@index');
