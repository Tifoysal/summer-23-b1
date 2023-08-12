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
use App\Http\Controllers\Website\SslCommerzPaymentController;

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

Route::get('/search',[HomeController::class,'search'])->name('search');

//cart start here
Route::get('/add-to-cart/{product_id}',[HomeController::class,'addToCart'])->name('add.to.cart');
Route::get('/cart-view',[HomeController::class,'cartView'])->name('cart.view');
Route::get('/cart-item-remove/{id}',[HomeController::class,'cartItemRemove'])->name('cart.item.remove');
Route::get('/cart-clear',[HomeController::class,'clearCart'])->name('cart.clear');





Route::get('/get-products-type/{type}',[WebsiteProductController::class,'geByType'])->name('products.by.type');

Route::get('/all-products',[WebsiteProductController::class,'allProducts'])->name('website.all-products');
Route::get('/customer-login',[HomeController::class,'login'])->name('customer.login');
Route::post('/customer-dologin',[CustomerController::class,'dologin'])->name('customer.dologin');

Route::get('/products-under-category/{categoryId}',[WebsiteProductController::class,'categoryWiseProducts'])->name('category.products');

Route::get('/customer-registration',[HomeController::class,'registration'])->name('customer.registration');
Route::post('/customer-store',[CustomerController::class,'store'])->name('customer.store');

Route::group(['middleware'=>'frontendAuth'],function(){

    Route::get('/checkout',[HomeController::class,'checkout'])->name('checkout');
    Route::post('/place-order',[HomeController::class,'placeOrder'])->name('place.order');
    
    Route::get('/customer-logout',[HomeController::class,'logout'])->name('customer.logout');

});

// SSLCOMMERZ Start
// Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
// Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);//hosted checkout
// Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);//easy checkout

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);




Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END






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

    Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
    Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::put('/product/update/{id}',[ProductController::class,'update'])->name('product.update');

    Route::get('/create-product-form',[ProductController::class,'createForm'])->name('product.create.form');
    Route::post('/product-store',[ProductController::class,'store'])->name('product.store');

    Route::get('/orders',[OrderController::class,'list'])->name('order.list');
    Route::get('/orders/view/{id}',[OrderController::class,'view'])->name('order.view');

});
