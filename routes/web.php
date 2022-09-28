<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Admin\Main\AdminController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Tag\TagController;
use App\Http\Controllers\Admin\Post\PostController;
use App\Http\Controllers\Admin\Useradmin\UseradminController;



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

    Route::group(['namespace' => 'Tag', 'prefix'=>'tags'], function () {
        Route::get('/', [TagController::class, 'index'])->name('admin.tag.index');
        Route::get('/create', [TagController::class, 'create'])->name('admin.tag.create');
        Route::post('/', [TagController::class, 'store'])->name('admin.tag.store');
        Route::get('/{tag}', [TagController::class, 'show'])->name('admin.tag.show');
        Route::get('/{tag}/edit', [TagController::class, 'edit'])->name('admin.tag.edit');
        Route::patch('/{tag}', [TagController::class, 'update'])->name('admin.tag.update');
        Route::delete('/{tag}', [TagController::class, 'destroy'])->name('admin.tag.destroy');
    });

    Route::group(['namespace' => 'Post', 'prefix'=>'posts'], function () {
        Route::get('/', [PostController::class, 'index'])->name('admin.post.index');
        Route::get('/create', [PostController::class, 'create'])->name('admin.post.create');
        Route::post('/', [PostController::class, 'store'])->name('admin.post.store');
        Route::get('/{post}', [PostController::class, 'show'])->name('admin.post.show');
        Route::get('/{post}/edit', [PostController::class, 'edit'])->name('admin.post.edit');
        Route::patch('/{post}', [PostController::class, 'update'])->name('admin.post.update');
        Route::delete('/{post}', [PostController::class, 'destroy'])->name('admin.post.destroy');
    });

    Route::group(['namespace' => 'Useradmin', 'prefix'=>'useradmins'], function () {
        Route::get('/', [UseradminController::class, 'index'])->name('admin.useradmin.index');
        Route::get('/create', [UseradminController::class, 'create'])->name('admin.useradmin.create');
        Route::post('/', [UseradminController::class, 'store'])->name('admin.useradmin.store');
        Route::get('/{useradmin}', [UseradminController::class, 'show'])->name('admin.useradmin.show');
        Route::get('/{useradmin}/edit', [UseradminController::class, 'edit'])->name('admin.useradmin.edit');
        Route::patch('/{useradmin}', [UseradminController::class, 'update'])->name('admin.useradmin.update');
        Route::delete('/{useradmin}', [UseradminController::class, 'destroy'])->name('admin.useradmin.destroy');
    });

});


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');