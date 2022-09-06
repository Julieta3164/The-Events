<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


    
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/events', [EventController::class, 'index' ]);
    Route::post('/events', [EventController::class, 'save' ])->name('events.save');

    Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
    Route::delete('/events/destroy', [EventController::class, 'destroy'])->name('events.destroy');
    
    Route::get('/events/{id}/edit', [EventController::class, 'edit'])->name("events.edit");
    Route::put('/events/{id}/edit', [EventController::class, 'update'])->name("events.update");


});
        
/* Route::resource('dashboard', DashboardController::class)->middleware(['auth']);  */ 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');  

Route::get('/', [HomeController::class, 'home' ])->name("home");
/* Route::get('/', [HomeController::class, 'imagenes' ])->name("imagenes"); */

require __DIR__.'/auth.php';

