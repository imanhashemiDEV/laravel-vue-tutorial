<?php


use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\Admin\PanelController::class,'index']);
Route::get('/users',[\App\Http\Controllers\Admin\UserController::class,'index']);
