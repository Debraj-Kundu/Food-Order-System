<?php

use App\Http\Controllers\LoginController;
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


Route::get('/login', [LoginController::class, 'login']);
Route::post('/process_login', [LoginController::class, 'process_login']);
Route::get('/home', [LoginController::class, 'home']);
Route::post('/item1', [LoginController::class, 'addItem1']);
Route::post('/item2', [LoginController::class, 'addItem2']);
Route::post('/item3', [LoginController::class, 'addItem3']);
Route::get('/orders', [LoginController::class, 'orders']);


