<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('list',[ProductController::class,'index']);
Route::get('add-product',[ProductController::class,'addProduct']);
Route::post('save-product',[ProductController::class,'saveProduct']);

Route::get('home',[HomeController::class,'index']);
