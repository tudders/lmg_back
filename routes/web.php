<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/',     [\App\Http\Controllers\MainController::class, 'home']);

Route::get('/users', [\App\Http\Controllers\MainController::class, 'users'])->name('users');

Route::get('/newuser', [\App\Http\Controllers\MainController::class, 'newuser']);

Route::post('/edituser', [\App\Http\Controllers\PostController::class, 'edituser']);

Route::post('/createuser', [\App\Http\Controllers\PostController::class, 'store']);

Route::post('/deleteuser', [\App\Http\Controllers\PostController::class, 'deleteuser']);
