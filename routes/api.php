<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('/get/product/{id}',[ProductController::class,'productView']);
Route::post('/create/product',[ProductController::class,'create']);

Route::put('/product/update/{id}',[ProductController::class, 'update']);

Route::post('/login',[UserController::class, 'login']);
Route::post('/registration',[UserController::class, 'registration']);


Route::group(['middleware'=>'auth:api'],function(){
    Route::get('/get/products',[ProductController::class,'getProducts']);
    Route::get('/logout',[UserController::class,'logout']);
});
