<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

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

Route::get('/', [MessageController::class, 'index']);
Route::post('/', [MessageController::class, 'send']);
Route::get('/message/{tokenRandom}', [MessageController::class, 'view']);
Route::get('/error', [MessageController::class, 'error404']);
