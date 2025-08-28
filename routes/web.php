<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// ------------------- ProductsController -------------------
Route::get('/products', [ProductsController::class,"index"])->name("products.index");
Route::get('/products/create', [ProductsController::class,"create"])->name("products.create");
Route::get('/products/{product}', [ProductsController::class,"show"])->name("products.show");
Route::post('/products', [ProductsController::class,"store"])->name("products.store");


// ------------------- UserController -------------------
Route::get('/{logState?}', function ($logState="login") {
    if($logState == "login")
    {
        return view('login');
    }
    elseif($logState == "signup")
    {
        return view('signup');
    }
})->name("logging");

Route::post('/login', [UserController::class,"login"])->name("login");
Route::post('/signup', [UserController::class,"signup"])->name("signup");

