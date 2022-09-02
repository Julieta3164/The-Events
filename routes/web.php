<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EditController;
use Illuminate\Support\Facades\Route;


    
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('/events', EventController::class);
    Route::resource('/events/create', CreateController::class);
    Route::resource('/events/edit', EditController::class);
});

        
/* Route::resource('dashboard', DashboardController::class)->middleware(['auth']);  */ 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');  

Route::get('/', function () {
    return view('home');
});


require __DIR__.'/auth.php';

