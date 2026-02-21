<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {

//     return view('home');
// });

Route::redirect('/home', '/');

Route::view('/home', 'home');

Route::get('/about/{name}', function ($name) {

    return view('about', ['name' => $name]);
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('user', [UserController::class, 'getUser']);
Route::get('contact', [UserController::class, 'contactUser']);
Route::get('username/{name}', [UserController::class, 'getName']);
Route::get('admin', [UserController::class, 'adminLogin']);
Route::view('user-form', 'user-form');
