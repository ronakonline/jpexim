<?php

use App\Http\Controllers\admin\HomesliderController;
use App\Http\Controllers\admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('admin/homeslider',[HomesliderController::class,'create'])->middleware('auth')->name('admin.homeslider');

Route::post('admin/homeslider',[HomesliderController::class,'store'])->middleware('auth')->name('admin.homeslider.store');

Route::delete('admin/homeslider/{id}',[HomesliderController::class,'destroy'])->middleware('auth')->name('admin.homeslider.destroy');

Route::get('admin/all-products',[ProductController::class,'index'])->middleware('auth')->name('admin.products.all');

Route::get('admin/add-product',[ProductController::class,'create'])->middleware('auth')->name('admin.products.add');

Route::post('admin/add-product',[ProductController::class,'store'])->middleware('auth')->name('admin.products.create');

?>
