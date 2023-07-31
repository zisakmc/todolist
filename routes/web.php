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

Route::any('/post', [PostController::class,'show']);


Route::get('/New-task', [NewTaskController::class,'show']);
Route::post('/New-task', [NewTaskController::class,'store']);

Route::get('/post/edit-task', [EditTaskController::class,'show'])->name('edit');
Route::post('/post/edit-task', [EditTaskController::class,'update']);
