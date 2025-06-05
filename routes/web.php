<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\Front\HomeController::class,'index']);
Route::get('/posts',[\App\Http\Controllers\Front\HomeController::class,'posts']);
