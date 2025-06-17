<?php


use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\Admin\PanelController::class,'index']);
Route::get('/users',[\App\Http\Controllers\Admin\UserController::class,'index']);
Route::get('/create_user',[\App\Http\Controllers\Admin\UserController::class,'create']);
Route::post('/store_user',[\App\Http\Controllers\Admin\UserController::class,'store']);
Route::get('/edit_user/{id}',[\App\Http\Controllers\Admin\UserController::class,'edit']);
Route::put('/update_user/{id}',[\App\Http\Controllers\Admin\UserController::class,'update']);
