<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Display welcome page for root URL
Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserController::class);
