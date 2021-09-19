<?php

use App\Http\Controllers\FaceBookController;
use App\Http\Controllers\Frontend\FrontendController;
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

Route::get('/' , [FrontendController::class,'index'])->name('frontend');
// Route::get('/search' , [FrontendController::class,'search']);
Route::post('/addcart/{id}',[FrontendController::class ,'addcart']);
Route::post('/orderconfrim',[FrontendController::class ,'orderconfrim']);
Route::get('/showcart' , [FrontendController::class,'showcart']);
Route::get('category' , [FrontendController::class,'category']);
Route::get('viewcategory/{sulg}' , [FrontendController::class,'viewcategory']);
Route::get('delete/{id}' , [FrontendController::class , 'delete']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
