<?php

use App\Http\Controllers\NewTaskController;
use App\Http\Controllers\PostController;
use App\Models\NewTask;
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

Route::get('/', function () {
    return view('home');
});


Route::get('/post', [PostController::class,'show']);
Route::get('/New-task', [NewTaskController::class,'show']);