<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\MainController::class, 'home']);

Route::get('/profiles', [\App\Http\Controllers\ProfilesController::class, 'index']);

Route::get('profiles/create', [\App\Http\Controllers\ProfilesController::class, 'create']);


Route::post('/create', [\App\Http\Controllers\ProfilesController::class, 'store']);
