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
Route::get('list-admin',[AdminController::class,'index'])->middleware('isLogin');
Route::post('save-admin',[AdminController::class,'saveAdmin'])->middleware('isLogin');

// Client:
Route::get('list-client',[ClientController::class,'index'])->middleware('isLogin');
Route::get('add-client',[ClientController::class,'addClient'])->middleware('isLogin');
Route::post('save-client',[ClientController::class,'saveClient'])->middleware('isLogin');
Route::get('edit-client/{id}',[ClientController::class,'editClient'])->middleware('isLogin');
Route::post('update-client',[ClientController::class,'updateClient'])->middleware('isLogin');
Route::get('delete-client/{id}',[ClientController::class,'deleteClient'])->middleware('isLogin');

// Feedback:
Route::get('list-feedback',[FeedbackController::class,'index'])->middleware('isLogin');
Route::get('add-feedback',[FeedbackController::class,'addFeedback'])->middleware('isLogin');
Route::post('save-feedback',[FeedbackController::class,'saveFeedback'])->middleware('isLogin');
Route::get('edit-feedback/{id}',[FeedbackController::class,'editFeedback'])->middleware('isLogin');
Route::post('update-feedback',[FeedbackController::class,'updateFeedback'])->middleware('isLogin');
Route::get('delete-feedback/{id}',[FeedbackController::class,'deleteFeedback'])->middleware('isLogin');

// Order:
Route::get('list-order',[OrderController::class,'index'])->middleware('isLogin');
Route::get('add-order',[OrderController::class,'addOrder'])->middleware('isLogin');
Route::post('save-order',[OrderController::class,'saveOrder'])->middleware('isLogin');
Route::get('edit-order/{id}',[OrderController::class,'editOrder'])->middleware('isLogin');
Route::post('update-order',[OrderController::class,'updateOrder'])->middleware('isLogin');
Route::get('delete-order/{id}',[OrderController::class,'deleteOrder'])->middleware('isLogin');

// Order Detail:
Route::get('list-orderdetail',[OrderDetailController::class,'index'])->middleware('isLogin');
Route::get('add-orderdetail',[OrderDetailController::class,'addOrderDetail'])->middleware('isLogin');
Route::post('save-orderdetail',[OrderDetailController::class,'saveOrderDetail'])->middleware('isLogin');
Route::get('edit-orderdetail/{id}',[OrderDetailController::class,'editOrderDetail'])->middleware('isLogin');
Route::post('update-orderdetail',[OrderDetailController::class,'updateOrderDetail'])->middleware('isLogin');
Route::get('delete-orderdetail/{id}',[OrderDetailController::class,'deleteOrderDetail'])->middleware('isLogin');

// Producer:
Route::get('list-producer',[ProducerController::class,'index'])->middleware('isLogin');
Route::get('add-producer',[ProducerController::class,'addProducer'])->middleware('isLogin');
Route::post('save-producer',[ProducerController::class,'saveProducer'])->middleware('isLogin');
Route::get('edit-producer/{id}',[ProducerController::class,'editProducer'])->middleware('isLogin');
Route::post('update-producer',[ProducerController::class,'updateProducer'])->middleware('isLogin');
Route::get('delete-producer/{id}',[ProducerController::class,'deleteProducer'])->middleware('isLogin');

// Product:
Route::get('list-product',[ProductController::class,'index'])->middleware('isLogin');
Route::get('add-product',[ProductController::class,'addProduct'])->middleware('isLogin');
Route::post('save-product',[ProductController::class,'saveProduct'])->middleware('isLogin');
Route::get('edit-product/{id}',[ProductController::class,'editProduct'])->middleware('isLogin');
Route::post('update-product',[ProductController::class,'updateProduct'])->middleware('isLogin');
Route::get('delete-product/{id}',[ProductController::class,'deleteProduct'])->middleware('isLogin');
Route::post('product-advancesearch', [ProductController::class,'advanceSearch']);

// Product Type:
Route::get('list-producttype',[ProductTypeController::class,'index'])->middleware('isLogin');
Route::get('add-producttype',[ProductTypeController::class,'addProductType'])->middleware('isLogin');
Route::post('save-producttype',[ProductTypeController::class,'saveProductType'])->middleware('isLogin');
Route::get('edit-producttype/{id}',[ProductTypeController::class,'editProductType'])->middleware('isLogin');
Route::post('update-producttype',[ProductTypeController::class,'updateProductType'])->middleware('isLogin');
Route::get('delete-producttype/{id}',[ProductTypeController::class,'deleteProductType'])->middleware('isLogin');

// Staff:
Route::get('list-staff',[StaffController::class,'index'])->middleware('isLogin');
Route::get('add-staff',[StaffController::class,'addStaff'])->middleware('isLogin');
Route::post('save-staff',[StaffController::class,'saveStaff'])->middleware('isLogin');
Route::get('edit-staff/{id}',[StaffController::class,'editStaff'])->middleware('isLogin');
Route::post('update-staff',[StaffController::class,'updateStaff'])->middleware('isLogin');
Route::get('delete-staff/{id}',[StaffController::class,'deleteStaff'])->middleware('isLogin');



// Other:
Route::get('/',[HomeController::class,'index']);
Route::get('product',[HomeProductController::class,'index']);
Route::get('productDetail/{id}',[HomeProductController::class,'productDetail']);
Route::post('home-advancesearch',[HomeProductController::class,'homeAdvanceSearch']);
Route::get('profile',[HomeController::class,'profile']);

Route::get('search',[HomeProductController::class,'search']);
Route::get('register',[ClientController::class,'register']);
Route::post('register-process',[ClientController::class,'registerProcess']);
Route::get('login',[ClientController::class,'login']);
Route::post('login-process',[ClientController::class,'loginProcess']);
Route::get('logout',[ClientController::class,'logout']);


//Admin
Route::get('admin-dashboard',[AdminController::class,'dashboard'])->middleware('isLogin');
Route::get('admin-login',[AdminController::class,'login']);
Route::post('admin-login-process',[AdminController::class,'loginProcess']);
Route::get('admin-logout',[AdminController::class,'logout']);
