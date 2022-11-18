<?php

//use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;


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




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__.'/auth.php';
