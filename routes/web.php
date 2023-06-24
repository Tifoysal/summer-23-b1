<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('/categories',[CategoryController::class,'list'])->name('category.list');
Route::get('/category-create-form',[CategoryController::class,'categoryForm'])->name('category.create.form');
Route::post('/category-store',[CategoryController::class,'categoryStore'])->name('category.store');

Route::get('/brand-list',[BrandController::class,'list'])->name('brand.list');


Route::get('/brand-create-form',[BrandController::class,'create'])->name('brand.create');

Route::post('/brand-store',[BrandController::class,'store'])->name('brand.store');


Route::get('/products',[ProductController::class,'list'])->name('product.list');
Route::get('/orders',[OrderController::class,'list'])->name('order.list');
