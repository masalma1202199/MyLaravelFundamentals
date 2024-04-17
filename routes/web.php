<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', \App\Http\Controllers\HomeController::class)->name('home');
Route::get('user', \App\Http\Controllers\UserController::class)->name('user.show');
Route::fallback(function () {
    return "<h1>Route not found</h1>";
});
Route::get('/user/{name}', function ($name) {
    $user = App\Models\User::find($name);
    return view('user.profile', ['user' => $user]);
});
Route::get('/about',\App\Http\Controllers\AboutController::class)->name('about');
