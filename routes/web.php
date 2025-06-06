<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\Front\HomeController::class,'index']);
Route::get('/post/{id}',[\App\Http\Controllers\Front\PostController::class,'post']);
