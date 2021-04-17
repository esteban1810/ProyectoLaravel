<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('auth.login');
// });
Route::resource('producto',ProductoController::class)->middleware('auth');
Route::resource('user', UserController::class)->middleware('auth');
// Route::get('user',[UserController::class,'index']);
// Route::get('user/create',[UserController::class,'create']);
// Route::get('user/{id}',[UserController::class,'show']);
// Route::get('user/{id}/edit',[UserController::class,'edit']);
// Route::patch('user/{id}',[UserController::class,'update']);
// Route::delete('user/{id}',[UserController::class,'destroy']);
// Route::post('user',[UserController::class,'store'])->name('user');

Auth::routes(['reset'=>false]);

/* 
Route::get('/producto', function () {
    return view('producto/index');
});

Route::get('/producto/create',[ProductoController::class,'create']); */



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [ProductoController::class, 'index'])->name('home')->middleware('auth');


Route::group(['middleware'=>'auth'],function(){
    Route::get('/', [ProductoController::class, 'index'])->name('home');
});