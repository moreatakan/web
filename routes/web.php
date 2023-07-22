<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\SliderController;
use App\Models\Post;
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


Route::resource('/',PostController::class);


Route::get('/dashboard', [DashboardController::class,'index'])->middleware('isLogin');


// Route::get('/sliders', function(){
//     return view('dashboard/sliders');
// });

// Route::get('/home',function(){
//     return view('welcome');
// });



Route::get('/admin',[LoginController::class,'index']);
Route::post('/admin/login', [LoginController::class,'login']);
Route::post('/logout', [LoginController::class,'logout']);

Route::resource('/dashboard/slider',SliderController::class);