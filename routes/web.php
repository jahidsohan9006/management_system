<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/sadmin', function () {
    return view('dashboard');
})->name('dashboard');



// Route::get('/sadmin/user', function () {
//     return view('users');
// })->name('user.login');



Route::resource('/sadmin/user', UserController::class);

// Route::resource('users', 'UserController')->names([
//     'index' => 'user.index',
//     'create' => 'user.create',
//     'store' => 'user.store',
//     'show' => 'user.show',
//     'edit' => 'user.edit',
//     'update' => 'user.update',
//     'destroy' => 'user.destroy',
// ]);