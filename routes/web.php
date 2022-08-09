<?php

use App\Http\Controllers\ClientController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\HomeProductController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\FeedbackController;

use App\Http\Controllers\OrderController;

use App\Http\Controllers\OrderDetailController;

use App\Http\Controllers\ProducerController;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\ProductTypeController;

use App\Http\Controllers\StaffController;



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



// Admin:
Route::get('list-admin',[AdminController::class,'index']);

// Feedback:
Route::get('list-feedback',[FeedbackController::class,'index']);

// Order:
Route::get('list-order',[OrderController::class,'index']);

// Order Detail:
Route::get('list-orderdetail',[OrderDetailController::class,'index']);

// Producer:
Route::get('list-producer',[ProducerController::class,'index']);

// Product:
Route::get('list-product',[ProductController::class,'index']);
Route::get('add-product',[ProductController::class,'addProduct']);
Route::post('save-product',[ProductController::class,'saveProduct']);
Route::get('edit-product/{id}',[ProductController::class,'editProduct']);
Route::post('update-product',[ProductController::class,'updateProduct']);
Route::get('delete-product/{id}',[ProductController::class,'deleteProduct']);

// Staff:
Route::get('list-staff',[StaffController::class,'index']);





// Other:
Route::get('/',[HomeController::class,'index'],);
Route::get('product',[HomeProductController::class,'index'],);
Route::get('register',[ClientController::class,'register']);
Route::post('register-process',[ClientController::class,'registerProcess']);
Route::get('login',[ClientController::class,'login']);
Route::post('login-process',[ClientController::class,'loginProcess']);
Route::get('logout',[ClientController::class,'logout']);