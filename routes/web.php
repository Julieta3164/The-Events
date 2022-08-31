<?php

use App\Http\Controllers\EventController;
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
})->middleware('auth')
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

Route::get('/test', function () {
    
    $user =User::find(2);

    $user->roles()->sync([2]);
    
    // Gate::authorize('haveaccess','home');
    // return $user;
    return $user->havePermission('events.create'); 
});

Route::resource('/role', 'RoleController')->names('role');

Route::resource('/user', 'UserController', ['except'=>[
    'create','store']])->names('user');


/* Route::get('/test', function () {
    Permission::create([
        'name' => 'Create Event',
        'slug' => 'event.create',
        'description' => 'Admin can create Event',
        ]);
    $role = Role::find(1);
    $role->permissions()->sync([1]);

    return $role->permissions;
}); */
// /* Route::get('/test', function () {

//   /*   return Role::create([
//         'name' => 'Admin',
//         'slug' => 'admin',
//         'description' => 'Administrador',
//         'full-access' => 'yes',

//     ]); */

// /*     return Role::create([
//         'name' => 'User',
//         'slug' => 'user',
//         'description' => 'Usuario',
//         'full-access' => 'no',

//     ]); */

//     $user = User::find(1);
//     $user->roles()->attach([1,2]);

//     return $user->roles;
// }); */
/* Route::get('/home', [home::class, 'index']); */
Route::get('/add', [add::class, 'index']);
Route::get('/description', [Description::class, 'index']);
Route::get('/create', [create::class, 'index']);
