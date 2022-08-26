<?php

use App\Http\Controllers\add;
use App\Http\Controllers\create;
use App\Http\Controllers\description;
use App\Http\Controllers\home;
use App\Models\Role;
use App\Models\User;
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

    $role = Role::find(1);
    return view('welcome', compact('role'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/home', [home::class, 'index']);
Route::get('/add', [add::class, 'index']);
Route::get('/description', [description::class, 'index']);
Route::get('/create', [create::class, 'index']);

Route::get('/home', [App\Http\Controllers\EventController::class, 'index'])->name('home');
Route::get('event/create', [App\Http\Controllers\EventController::class, 'create']);
Route::post('event', [App\Http\Controllers\EventController::class, 'store']);
Route::get('event/{event}/edit', [App\Http\Controllers\EventController::class, 'edit']);
Route::get('event/{event}', [App\Http\Controllers\EventController::class, 'show']);
Route::put('event/{event}', [App\Http\Controllers\EventController::class, 'update']);
Route::delete('event/{event}', [App\Http\Controllers\EventController::class, 'destroy']);