<?php


use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PanelController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PanelController::class,'index'])->name('panel.index');

Route::get('/users',[UserController::class,'index'])->name('users.index');
Route::get('/create_user',[UserController::class,'create'])->name('users.create');
Route::post('/store_user',[UserController::class,'store'])->name('users.store');
Route::get('/edit_user/{id}',[UserController::class,'edit'])->name('users.edit');
Route::put('/update_user/{id}',[UserController::class,'update'])->name('users.update');
Route::delete('/delete_user/{id}',[UserController::class,'destroy'])->name('users.destroy');

Route::resource('/categories', CategoryController::class);
Route::resource('/posts', PostController::class);
