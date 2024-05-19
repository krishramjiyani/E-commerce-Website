<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\productController;
use App\Http\Middleware\authMiddleware;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PDFController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [UserController::class,'login'])->name('login');
Route::get('/register', [UserController::class,'register'])->name('register');
Route::get('/adminReg', [UserController::class,'adminReg'])->name('adminReg');

Route::post('/authenticate',[UserController::class,'authenticate'])->name('authenticate');
Route::post('/adminAuthenticate',[UserController::class,'adminAuthenticate'])->name('adminAuthenticate');

Route::post('/logauth',[UserController::class,'logauth'])->name('logauth');











Route::middleware([authMiddleware::class])->group(function (){

Route::get('/', [UserController::class,'home'])->name('home');


Route::get('/admin',[adminController::class,'adminHome'])->name('adminHome');
Route::get('/product/add',[productController::class,'add'])->name('product.add');
Route::post('/product/addProduct',[productController::class,'addProduct'])->name('product.addProduct');
Route::get('/product/edit/{id}',[productController::class,'edit'])->name('product.edit');
Route::post('/product/edit/updated',[productController::class,'updated'])->name('product.updated');
Route::get('/product/delete/{id}',[productController::class,'delete'])->name('product.delete');
Route::get('/setActive/{p_id}',[productController::class,'setActive'])->name('setActive');

Route::get('/cart/{p_id}',[productController::class,'cart'])->name('cart');


Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::get('/allusers',[UserController::class,'allusers'])->name('allusers');


// bulkUpload

Route::get('/bulkupload',[productController::class,'bulkupload'])->name('bulkupload');
Route::post('/bulkuploadasset',[productController::class,'bulkuploadasset'])->name('bulkuploadasset');


//add to cart

Route::post('/addToCart',[productController::class,'addToCart'])->name('addToCart');

Route::get('/cartlist',[productController::class,'cartlist'])->name('cartlist');

//order
Route::get('/orders',[OrderController::class,'orders'])->name('orders');

Route::get('/finalorders',[OrderController::class,'finalorders'])->name('finalorders');

Route::get('/adminoders',[productController::class,'adminoders'])->name('adminoders');

Route::get('/updateStatus/{o_id}',[OrderController::class,'updateStatus'])->name('updateStatus');

Route::get('/myOrders',[UserController::class,'myOrders'])->name('myOrders');

Route::get('/downloadInvoice/{o_id}',[PDFController::class,'downloadInvoice'])->name('downloadInvoice');


});
// Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');
// Route::get('/category',[categoryController::class,'index'])->name('category.index');
// Route::get('/category/add',[categoryController::class,'add'])->name('category.add');
// Route::post('/category/add',[categoryController::class,'insert'])->name('category.insert');
// Route::get('category/{id}',[categoryController::class,'delete1'])->name('category.delete');
// Route::get('category/edit/{id}',[categoryController::class,'edit'])->name('category.edit');
// Route::get('category/update',[categoryController::class,'update'])->name('category.update');

