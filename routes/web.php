<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('not_auth.landing');
})->name('landing'); 

Route::get('/login', function () {
    return view('not_auth.login');
})->name('login'); 

Route::get('/register', function () { 
    return view('not_auth.register');
})->name('register'); 

Route::get('/dashboard', function () {
    return view('is_auth.dashboard');
})->name('dashboard'); 

Route::get('/reports', function () {
    return view('is_auth.reports');
})->name('reports'); 

Route::get('/wallet', function () {
    return view('is_auth.wallet');
})->name('wallet'); 
