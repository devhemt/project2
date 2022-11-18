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


Route::get('/acc', function () {
    return view('frontend.account');
});

Route::get('/blog', function () {
    return view('frontend.blog');
});

Route::get('/cart', function () {
    return view('frontend.cart');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/createacc', function () {
    return view('frontend.auth.create_acc');
});

Route::get('/login', function () {
    return view('frontend.auth.login');
});

Route::get('/prd', function () {
    return view('frontend.product');
});

Route::get('/shop', function () {
    return view('frontend.shop');
});

Route::get('/singleblog', function () {
    return view('frontend.single_blog');
});


Route::resource('/', HomeController::class);

Route::resource('/item', ItemsController::class);

Route::resource('/customer', CustomerController::class);






// Route::get('/role',[
//     'middleware' => 'role:superadmin',
//     'uses' => 'MainController@checkRole',
//  ]);