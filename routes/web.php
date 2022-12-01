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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard/index');
})->name('dashboard');;

Route::get('/about', function () {
    return view('dashboard/about');
})->name('about');;

Route::get('/contact', function () {
    return view('dashboard/contact');
});

Route::get('/services', function () {
    return view('dashboard/services');
});

Route::get('/gallery', function () {
    return view('dashboard/gallery');
});

Route::get('/gallery-single', function () {
    return view('dashboard/gallery-single');
});

Route::get('/admin', function () {
    return view('admin/dashboard');
});

Route::get('/admin-user', function () {
    return view('admin/user');
});

Route::get('/admin-table', function () {
    return view('admin/tables');
});

Route::get('/admin-typography', function () {
    return view('admin/typography');
});