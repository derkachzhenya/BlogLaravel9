<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Admin\Main\AdminController;
use App\Http\Controllers\Admin\Category\CategoryController;



Route::group(['namespace' => 'Main'], function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
});

Route::group(['namespace'=>'Admin', 'prefix'=>'admin' ], function() {

    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
    });

    Route::group(['namespace' => 'Category', 'prefix'=>'categories'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/{category}', [CategoryController::class, 'show'])->name('admin.category.show');
        Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::patch('/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
    });

});


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');