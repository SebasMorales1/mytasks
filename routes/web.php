<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'app');

Route::middleware('guest')->group(function () {
  Route::view('/sign-up', 'sign-up')->name('signUp');
});