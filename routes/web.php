<?php

use App\Http\Controllers\CategoryizinController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IzinController;
use App\Http\Controllers\SpelayananController;

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
Route::get('/',[HomeController::class,'index']);
Route::get('/home/detailpost/{post:slug}',[HomeController::class,'show']);
Route::get('/perizinan/jenisizin',[HomeController::class,'perizinan']);
Route::get('/perizinan/sp',[HomeController::class,'standarpelayanan']);

Route::get('/dashboard/posts/slug',[PostController::class, 'chekSlug']);
Route::resource('/dashboard/posts',PostController::class)->middleware('isLogin');

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

Route::get('/dashboard/izin/slug',[IzinController::class, 'chekSlug']);
Route::resource('/dashboard/izin',IzinController::class);

Route::get('/dashboard/categoryizin/slug',[CategoryizinController::class, 'chekSlug']);
Route::resource('/dashboard/categoryizin',CategoryizinController::class);

Route::resource('/dashboard/sp',SpelayananController::class);