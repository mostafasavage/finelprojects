<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashbarodController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProdectController;
use App\Http\Controllers\Admin\UserConntroller;
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

Route::middleware('auth' , 'Isadmin')->prefix('admin')->group(function(){
Route::get('/' , [DashbarodController::class,'index'])->name('dashboard');
Route::resource('/user' , UserConntroller::class);
Route::resource('/prod' , ProdectController::class);
Route::resource('/cate' , CategoryController::class);
Route::resource('/order' , OrderController::class);
});