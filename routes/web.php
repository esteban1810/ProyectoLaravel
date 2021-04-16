<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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
Route::resource('producto',ProductoController::class);
Auth::routes();

/* 
Route::get('/producto', function () {
    return view('producto/index');
});

Route::get('/producto/create',[ProductoController::class,'create']); */



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [ProductoController::class, 'index'])->name('home');


Route::group(['middleware'=>'auth'],function(){
    Route::get('/', [ProductoController::class, 'index'])->name('home');
});