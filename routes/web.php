<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ProducerController;
use App\Http\Controllers\ProductTypeController;
use App\Models\ProductType;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('list-product',[ProductController::class,'index']);
Route::get('list-admin',[AdminController::class,'index']);
Route::get('list-feedback',[FeedbackController::class,'index']);
Route::get('list-producer',[ProducerController::class,'index']);

Route::get('add-product',[ProductController::class,'addProduct']);
Route::post('save-product',[ProductController::class,'saveProduct']);
Route::get('edit-product/{id}',[ProductController::class,'editProduct']);
Route::post('update-product',[ProductController::class,'updateProduct']);
Route::get('delete-product/{id}',[ProductController::class,'deleteProduct']);


Route::get('/',[HomeController::class,'index'],);

Route::get('register',[ClientController::class,'register']);
Route::get('login',[ClientController::class,'login']);


