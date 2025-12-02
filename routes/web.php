<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;

// -----------------------------
// Frontend routes (optional)
// -----------------------------
Route::get('/', function () {
    return view('welcome');
});

// -----------------------------
// Admin routes
// -----------------------------
Route::prefix('admin')->group(function() {

    // Dashboard route
    Route::get('/', function() {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Customers CRUD
    Route::resource('customers', CustomerController::class);

    // Products CRUD
    Route::resource('products', ProductController::class);
});
