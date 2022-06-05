<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RequestController;
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

Route::get('/', [NavController::class, 'index']);
Route::get('/contact', [NavController::class, 'contact']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'logining']);
Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'registering']);
Route::get('/dashboard',[RequestController::class, 'dashboard']);
Route::get('/request',[RequestController::class, 'request_page']);
Route::get('/request/details/{id}',[RequestController::class, 'req_det']);
Route::post('/new/request',[RequestController::class, 'new_request']);
Route::post('/reply/request',[RequestController::class, 'reply_request']);