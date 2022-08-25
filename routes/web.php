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

    $role = Role::find(2);
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