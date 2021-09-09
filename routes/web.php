<?php

use Illuminate\Support\Facades\Route;

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

//route halaman utama
Route::view('/', 'pages.public.index') -> name('index');
Route::view('/product/detail', 'pages.public.product-detail') -> name('product-detail');


//route prefix untuk login dan register
Route::prefix('auth') -> group(function()
{
    Route::view('/login', 'pages.auth.login') -> name('login');
    Route::view('/register', 'pages.auth.register') -> name('register');
});

Route::prefix('public') -> group(function()
{
    Route::view('/cart', 'pages.public.cart') -> name('cart');
    Route::view('/update', 'pages.public.cart-update') -> name('cart.update');
});
//route prefix untuk dashboard admin
Route::prefix('admin') -> group(function()
{
    Route::view('/dashboard', 'pages.admin.dashboard') -> name('dashboard');
    Route::view('/profile', 'pages.admin.profile') -> name('profile');
    Route::view('/create', 'pages.admin.product-create') -> name('product.create');
    Route::view('/update', 'pages.admin.product-update') -> name('product.update');
});