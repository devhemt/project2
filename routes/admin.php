<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/addbatch', [\App\Http\Controllers\ProductController::class,'batch']);

Route::get('/canceledorder', [\App\Http\Controllers\InvoiceController::class, 'index0']);
Route::get('/noprocessorder', [\App\Http\Controllers\InvoiceController::class, 'index1']);
Route::get('/confirmedorder', [\App\Http\Controllers\InvoiceController::class, 'index2']);
Route::get('/packingorder', [\App\Http\Controllers\InvoiceController::class, 'index3']);
Route::get('/deliveryorder', [\App\Http\Controllers\InvoiceController::class, 'index4']);
Route::get('/successfulorder', [\App\Http\Controllers\InvoiceController::class, 'index5']);

Route::resource('/product', ProductController::class);

Route::resource('/invoice', InvoiceController::class);

Route::resource('/profile', \App\Http\Controllers\ProfileController::class);
