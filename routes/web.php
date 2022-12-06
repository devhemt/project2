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



Route::get('/blog', function () {
    return view('client.blog');
});

Route::get('/cart', function () {
    return view('client.cart');
});

Route::get('/contact', function () {
    return view('client.contact');
});

Route::get('/createacc', function () {
    return view('client.auth.create_acc');
});

Route::get('/shop', function () {
    return view('client.shop');
});

Route::get('/singleblog', function () {
    return view('client.single_blog');
});

Route::get('/test',[\App\Http\Controllers\InvoiceController::class,'test']);

Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);
Route::get('/product/{id}',[\App\Http\Controllers\HomeController::class, 'show']);

Route::match(['get', 'post'], '/login', [\App\Http\Controllers\CustomerController::class, 'login'])->name('login');


Route::get('registration', [\App\Http\Controllers\CustomerController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [\App\Http\Controllers\CustomerController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [\App\Http\Controllers\CustomerController::class, 'signOut'])->name('signout');

