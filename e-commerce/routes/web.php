<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ShopController;
Route::get('/',[StaticController::class ,'index'])->name('home.index');
Route::get('/layout',[StaticController::class ,'layout'])->name('home.about');
Route::get('/contact', [StaticController::class ,'contact'])->name('home.contact');
Route::get('/login',[StaticController::class ,'login'])->name('home.login');
Route::get('/singin',[StaticController::class ,'singin'])->name('home.singin');
Route::get('/shope',[StaticController::class ,'shope'])->name('home.shope');
Route::resource('shop',ShopController::class);
// Route::get('/singin', function () {
    // return view('singin');
// });
// Route::get('/login', function () {
    // return view('login');
// });