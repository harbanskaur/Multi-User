<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\SubAdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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
Route::get('/',[AuthController::class,'login']);

Route::get('/superadmin',[SuperAdminController::class,'superadmin']);
Route::get('/subadmin',[SubAdminController::class,'subadmin']);
Route::get('/admin',[AdminController::class,'admin']);
Route::get('/user',[UserController::class,'user']);



