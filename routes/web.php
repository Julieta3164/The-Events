<?php

use App\Http\Controllers\EventController;
use App\Models\Role;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/testing', function () {

    $role = Role::find(1);
    return view('testing', compact('role'));
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/events/create', function () {
    return view('events.create');
})
// ->middleware('auth')
->name('events.create');

Route::get('/events/edit', function () {
    return view('events.edit');
})
// ->middleware('auth')
->name('events.edit');

Route::get('/events', function () {
    return view('events.events')
    ->name('events');
});

Route::resource('/events', EventController::class);
