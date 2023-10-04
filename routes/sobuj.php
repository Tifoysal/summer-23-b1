<?php

use App\Http\Controllers\Website\HomeController;
use Illuminate\Support\Facades\Route;

//routes for website
Route::get('/mon-mane-na',[HomeController::class,'home'])->name('home');
