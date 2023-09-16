<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('posts')
    ->as('posts.')
    ->group(static function (): void {
        Route::view('create', 'posts.create')->name('create');
        Route::get('/{post}', \App\Http\Controllers\Post\ShowController::class)->name('show');
        Route::post('store', \App\Http\Controllers\Post\StoreController::class)->name('store');
        Route::get('/update/{post}', \App\Http\Controllers\Post\UpdateController::class)->name('update');
    });
