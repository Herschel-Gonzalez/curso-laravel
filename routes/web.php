<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
//use App\Http\Controllers\RolController;
use App\Http\Controllers\PageController;

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

//Route::resource('rol',RolController::class);

Route::controller(PageController::class)->group(function(){
    Route::get('/','home')->name('home');
    Route::get('users','users')->name('users');
    
    //Route::get('users/{user}','user')->name('user');
});

Route::controller(UserController::class)->group(function(){
    Route::get('users/create','create')->name('create');
    Route::post('users/create','store')->name('store');
    //Route::get('users/{user}','user')->name('user');
});



//redirecciona al formulario
//Route::get('/users/create', [UserController::class, 'create']);

//enviar formulario
//Route::post('/users/create',  [UserController::class, 'store']);

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Route::get('login', function () {
//    return view('welcome');
//});
