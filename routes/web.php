<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\PageController;




Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/', function () {
    return view('index');
});

Route::resource('coupons', CouponController::class);

use App\Http\Controllers\UserController;

Route::resource('users', UserController::class);