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
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    });

});


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');