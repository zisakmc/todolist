<?php

use App\Http\Controllers\EditTaskController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\NewTaskController;
use App\Http\Controllers\PostController;
use App\Models\NewTask;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\PostCondition;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [homeController::class, 'count']);
Route::get('delete/{id}', [homeController::class, 'destroy'])->name('delete');

Route::get('post', [PostController::class,'show']);
//Route::get('post', [PostController::class,'sort'])->name('sort');


Route::get('New-task', [NewTaskController::class,'show']);
Route::post('New-task', [NewTaskController::class,'store']);

Route::get('edit/{id}', [EditTaskController::class,'show'])->name('edit');
Route::post('update/{id}', [EditTaskController::class,'data_update'])->name('update');

