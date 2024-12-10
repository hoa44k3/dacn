<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HishController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
Route::group(['prefix'=>''],function(){
    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::get('/contact',[HomeController::class,'contact'])->name('contact');
    Route::get('/about',[HomeController::class,'about'])->name('about');
    Route::get('/blog',[HomeController::class,'blog'])->name('blog');
    Route::get('/blogdetail',[HomeController::class,'blogdetail'])->name('blogdetail');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::group(['prefix' => 'category'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    });
    
});
