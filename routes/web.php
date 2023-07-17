<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Website\ProductController as WebsiteProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Website\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//routes for website
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/all-products',[WebsiteProductController::class,'allProducts'])->name('website.all-products');
Route::get('/customer-login',[HomeController::class,'login'])->name('customer.login');
Route::post('/customer-dologin',[CustomerController::class,'dologin'])->name('customer.dologin');


Route::get('/customer-registration',[HomeController::class,'registration'])->name('customer.registration');
Route::post('/customer-store',[CustomerController::class,'store'])->name('customer.store');



//routes for admin panel
//show login form
Route::get('/admin/login',[UserController::class,'login'])->name('admin.login');

//submit login form
Route::post('/admin/do-login',[UserController::class,'doLogin'])->name('admin.do-login');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::get('/logout',[UserController::class,'logout'])->name('admin.logout');
    Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');

    Route::get('/categories',[CategoryController::class,'list'])->name('category.list');
    Route::get('/category-create-form',[CategoryController::class,'categoryForm'])->name('category.create.form');
    Route::post('/category-store',[CategoryController::class,'categoryStore'])->name('category.store');
    



Route::get('/brand-list',[BrandController::class,'list'])->name('brand.list');


Route::get('/brand-create-form',[BrandController::class,'create'])->name('brand.create');

Route::post('/brand-store',[BrandController::class,'store'])->name('brand.store');


Route::get('/products',[ProductController::class,'list'])->name('product.list');
Route::get('/create-product-form',[ProductController::class,'createForm'])->name('product.create.form');
Route::post('/product-store',[ProductController::class,'store'])->name('product.store');

Route::get('/orders',[OrderController::class,'list'])->name('order.list');

});
