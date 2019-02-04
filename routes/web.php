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

Route::get('/admin-panel', function () {
    return view('dashboard.home');
});
Route::get('/master', function () {
    return view('dashboard.master');
});
Route::get('/shop', function () {
    return view('front.shop');
});
Route::get('/', function () {
    return view('front.home');
});
Route::get('/about', function () {
    return view('front.about');
});
Route::get('/faqs', function () {
    return view('front.faqs');
});

