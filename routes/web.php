<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UsersController::class,"index"])->middleware(['auth', 'verified'])->name('users.index');
Route::get('/users', [UsersController::class,"index"])->middleware(['auth', 'verified'])->name('users.index');
// ------------------- ProductsController -------------------
Route::get('/products', [ProductsController::class,"index"])->name('products.index');
Route::get('/products/create', [ProductsController::class,"create"])->name("products.create");
Route::get('/products/{product}', [ProductsController::class,"show"])->name("products.show");
Route::post('/products', [ProductsController::class,"store"])->name("products.store");
Route::DELETE('/products/{product}', [ProductsController::class,"destroy"])->name("products.destroy");
Route::PUT('/products/{product}', [ProductsController::class,"update"])->name("products.update");
Route::get('/products/{product}/edit', [ProductsController::class,"edit"])->name("products.edit");


// ------------------- Auth --------------------
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
