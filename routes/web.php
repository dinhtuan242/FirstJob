<?php

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

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard.index');
    Route::get('/login', function () {
        return view('admin.pages.login');
    })->name('login');
    Route::get('/register', function () {
        return view('admin.pages.register');
    })->name('register');
    Route::get('/forgot', function () {
        return view('admin.pages.forgotpassword');
    })->name('forgot_password');
});
Route::group(['prefix' => 'home'], function () {
    Route::get('/', function () {
        return view('frontend.pages.index');
    })->name('frontend.index');
    Route::get('/account', function () {
        return view('frontend.pages.account');
    })->name('frontend.account');
});
