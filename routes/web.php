<?php

use App\Http\Controllers\EditTaskController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\NewTaskController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', [homeController::class, 'count']);
Route::get('delete/{id}', [homeController::class, 'destroy'])->name('delete');

Route::get('post', [PostController::class,'show']);


Route::get('New-task', [NewTaskController::class,'show']);
Route::post('New-task', [NewTaskController::class,'store']);

Route::get('edit/{id}', [EditTaskController::class,'show'])->name('edit');
Route::post('update/{id}', [EditTaskController::class,'data_update'])->name('update');


Route::get('register', [UserController::class,'show'])->name('register');
Route::post('register', [UserController::class,'store']);