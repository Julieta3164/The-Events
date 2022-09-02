<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\Description;
use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Support\Facades\Gate;
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
Route::middleware(['admin'])->group(function () {

    Route::get('/adminview', function() {
        return view('adminview');})->middleware(['admin']);
    
    Route::get('/events/create', function () {
        return view('create');
    })->middleware(['admin'])->name('create');

    Route::get('/events', function () {
        return view('events.events');
    })->middleware(['admin'])
        ->name('events');

    Route::get('/events/edit', function () {
        return view('events.edit');
    })->middleware(['admin'])
    ->name('events.edit');
        
    Route::resource('/events', EventController::class);
    
});
    
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('home');
});

Route::get('/testing', function () {

    $role = Role::find(1);
    return view('testing', compact('role'));
});



require __DIR__.'/auth.php';


Route::get('/test', function () {
    return view('events.create');
})->middleware(['admin'])->name('events.create');
