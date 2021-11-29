<?php

use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\HomesliderController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SiteSettingController;
use Illuminate\Support\Facades\Route;

//TODO: change cache option to file from null in .env file

Route::middleware(['auth'])->group(function () {

    Route::get('admin/dashboard',[DashboardController::class, 'index'])->name('dashboard');

    Route::get('admin/homeslider', [HomesliderController::class, 'create'])->name('admin.homeslider');

    Route::post('admin/homeslider', [HomesliderController::class, 'store'])->name('admin.homeslider.store');

    Route::delete('admin/homeslider/{id}', [HomesliderController::class, 'destroy'])->name('admin.homeslider.destroy');

    Route::get('admin/all-products', [ProductController::class, 'index'])->name('admin.products.all');

    Route::get('admin/add-product', [ProductController::class, 'create'])->name('admin.products.add');

    Route::post('admin/add-product', [ProductController::class, 'store'])->name('admin.products.create');

    Route::get('admin/edit-product/{id}',[ProductController::class, 'edit'])->name('admin.products.edit');

    Route::post('admin/edit-product/{id}',[ProductController::class, 'update'])->name('admin.products.update');

    Route::post('admin/edit-productimg/{id}',[ProductController::class, 'updateimages'])->name('admin.products.updateimages');

    Route::get('admin/view-product/{slug}',[ProductController::class,'view'])->name('admin.products.view');

    Route::delete('admin/delete-product/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');

    Route::get('admin/contact_setting',[SiteSettingController::class,'contact_setting'])->name('admin.contact_setting');

    Route::post('admin/contact_setting',[SiteSettingController::class,'contact_setting_store'])->name('admin.contact_setting.store');

    Route::get('admin/add-blog',[BlogController::class,'add'])->name('admin.blogs.add');

    Route::post('admin/add-blog',[BlogController::class,'store'])->name('admin.blogs.create');

    Route::get('admin/all-blogs',[BlogController::class,'all'])->name('admin.blogs.all');

    Route::delete('admin/delete-blog/{id}',[BlogController::class,'destroy'])->name('admin.blogs.destroy');

    Route::get('admin/edit-blog/{id}',[BlogController::class,'edit'])->name('admin.blogs.edit');

    Route::post('admin/edit-blog/{id}',[BlogController::class,'update'])->name('admin.blogs.update');

    Route::get('admin/about',[AboutController::class,'index'])->name('admin.about');

    Route::post('admin/update',[AboutController::class,'update'])->name('admin.about.update');

    Route::get('admin/contact-messages',[ContactController::class,'list'])->name('admin.contact.list');

});
