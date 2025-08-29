<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('dashboard');
});
// ------------------- ProductsController -------------------
Route::get('/products', [ProductsController::class,"index"])->name("products.index");
Route::get('/products/create', [ProductsController::class,"create"])->name("products.create");
Route::get('/products/{product}', [ProductsController::class,"show"])->name("products.show");
Route::post('/products', [ProductsController::class,"store"])->name("products.store");


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
