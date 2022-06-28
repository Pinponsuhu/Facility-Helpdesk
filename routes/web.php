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
Route::get('/close/request',[RequestController::class, 'close_request']);
Route::get('/logout',[RequestController::class, 'logout']);
//admin part
Route::get('/admin/dashboard',[RequestController::class, 'admin_dashboard']);
Route::get('/admin/request',[RequestController::class, 'admin_request_page']);
Route::get('/admin/request/details/{id}',[RequestController::class, 'req_det_two']);
Route::get('/all/admin',[RequestController::class, 'all_admin']);
Route::post('/add/admin',[RequestController::class, 'registering']);
