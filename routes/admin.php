<?php

use App\Http\Controllers\admin\HomesliderController;
use App\Http\Controllers\admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {

    Route::get('admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('admin/homeslider', [HomesliderController::class, 'create'])->name('admin.homeslider');

    Route::post('admin/homeslider', [HomesliderController::class, 'store'])->name('admin.homeslider.store');

    Route::delete('admin/homeslider/{id}', [HomesliderController::class, 'destroy'])->name('admin.homeslider.destroy');

    Route::get('admin/all-products', [ProductController::class, 'index'])->name('admin.products.all');

    Route::get('admin/add-product', [ProductController::class, 'create'])->name('admin.products.add');

    Route::post('admin/add-product', [ProductController::class, 'store'])->name('admin.products.create');
});
