<?php

use App\Http\Controllers\HomeController;

use App\Http\Controllers\HomeProductController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\ClientController;

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
Route::post('save-admin',[AdminController::class,'saveAdmin']);

// Client:
Route::get('list-client',[ClientController::class,'index']);
Route::get('add-client',[ClientController::class,'addClient']);
Route::post('save-client',[ClientController::class,'saveClient']);
Route::get('edit-client/{id}',[ClientController::class,'editClient']);
Route::post('update-client',[ClientController::class,'updateClient']);
Route::get('delete-client/{id}',[ClientController::class,'deleteClient']);

// Feedback:
Route::get('list-feedback',[FeedbackController::class,'index']);
Route::get('add-feedback',[FeedbackController::class,'addFeedback']);
Route::post('save-feedback',[FeedbackController::class,'saveFeedback']);
Route::get('edit-feedback/{id}',[FeedbackController::class,'editFeedback']);
Route::post('update-feedback',[FeedbackController::class,'updateFeedback']);
Route::get('delete-feedback/{id}',[FeedbackController::class,'deleteFeedback']);

// Order:
Route::get('list-order',[OrderController::class,'index']);
Route::get('add-order',[OrderController::class,'addOrder']);
Route::post('save-order',[OrderController::class,'saveOrder']);
Route::get('edit-order/{id}',[OrderController::class,'editOrder']);
Route::post('update-order',[OrderController::class,'updateOrder']);
Route::get('delete-order/{id}',[OrderController::class,'deleteOrder']);

// Order Detail:
Route::get('list-orderdetail',[OrderDetailController::class,'index']);
Route::get('add-orderdetail',[OrderDetailController::class,'addOrderDetail']);
Route::post('save-orderdetail',[OrderDetailController::class,'saveOrderDetail']);
Route::get('edit-orderdetail/{id}',[OrderDetailController::class,'editOrderDetail']);
Route::post('update-orderdetail',[OrderDetailController::class,'updateOrderDetail']);
Route::get('delete-orderdetail/{id}',[OrderDetailController::class,'deleteOrderDetail']);

// Producer:
Route::get('list-producer',[ProducerController::class,'index']);
Route::get('add-producer',[ProducerController::class,'addProducer']);
Route::post('save-producer',[ProducerController::class,'saveProducer']);
Route::get('edit-producer/{id}',[ProducerController::class,'editProducer']);
Route::post('update-producer',[ProducerController::class,'updateProducer']);
Route::get('delete-producer/{id}',[ProducerController::class,'deleteProducer']);

// Product:
Route::get('list-product',[ProductController::class,'index']);
Route::get('add-product',[ProductController::class,'addProduct']);
Route::post('save-product',[ProductController::class,'saveProduct']);
Route::get('edit-product/{id}',[ProductController::class,'editProduct']);
Route::post('update-product',[ProductController::class,'updateProduct']);
Route::get('delete-product/{id}',[ProductController::class,'deleteProduct']);

// Product Type:
Route::get('list-producttype',[ProductTypeController::class,'index']);
Route::get('add-producttype',[ProductTypeController::class,'addProductType']);
Route::post('save-producttype',[ProductTypeController::class,'saveProductType']);
Route::get('edit-producttype/{id}',[ProductTypeController::class,'editProductType']);
Route::post('update-producttype',[ProductTypeController::class,'updateProductType']);
Route::get('delete-producttype/{id}',[ProductTypeController::class,'deleteProductType']);

// Staff:
Route::get('list-staff',[StaffController::class,'index']);
Route::get('add-staff',[StaffController::class,'addStaff']);
Route::post('save-staff',[StaffController::class,'saveStaff']);
Route::get('edit-staff/{id}',[StaffController::class,'editStaff']);
Route::post('update-staff',[StaffController::class,'updateStaff']);
Route::get('delete-staff/{id}',[StaffController::class,'deleteStaff']);



// Other:
Route::get('/',[HomeController::class,'index'],);
Route::get('product',[HomeProductController::class,'index'],);
Route::get('productDetail/{id}',[HomeProductController::class,'productDetail']);
Route::get('search',[HomeProductController::class,'search']);
Route::get('register',[ClientController::class,'register']);
Route::post('register-process',[ClientController::class,'registerProcess']);
Route::get('login',[ClientController::class,'login']);
Route::post('login-process',[ClientController::class,'loginProcess']);
Route::get('logout',[ClientController::class,'logout']);