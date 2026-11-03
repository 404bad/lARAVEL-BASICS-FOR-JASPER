<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home');
});
Route::redirect('/home', '/');


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('welcome');
});

Route::get('/about/{name}', function ($name) {
    return view('welcome', ['name' => $name]);
});


// user controller
Route::get('/users', [UserController::class, 'index']);
Route::get('/get-users', [UserController::class, 'getUsers']);
// Route::get('/get-details', [UserController::class, 'getDetails']);
Route::get('/get-details/{name}', [UserController::class, 'getDetails']);


// $type = 'user';
// Route::view('login', 'login');
// Route::get('login/{type}', function ($type) {
//     return view('login', ['type' => $type]);
// });
// Route::view('signup', 'signup', ['type' => $type]);
// Route::view('register', 'signup', ['type' => $type]);

Route::get('/login', [AuthController::class, 'login']);
Route::get('/login/{type}', [AuthController::class, 'login']);

Route::get('/signup', [AuthController::class, 'signup']);

