<?php

use Illuminate\Support\Facades\Route;

Route::get('/{category_id?}',[\App\Http\Controllers\Front\HomeController::class,'index'])->name('home');
Route::get('/post/{id}',[\App\Http\Controllers\Front\PostController::class,'post']);
