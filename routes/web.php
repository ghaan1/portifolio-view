<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

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
    return view('dashboard/index');
})->name('dashboard');

Route::get('/about', function () {
    return view('dashboard/about');
})->name('about');

Route::get('/contact', function () {
    return view('dashboard/contact');
})->name('contact');

Route::get('/services', function () {
    return view('dashboard/services');
})->name('services');

Route::get('/gallery', function () {
    return view('dashboard/gallery');
})->name('gallery');

Route::get('/gallery-single', function () {
    return view('dashboard/gallery-single');
})->name('gallery-single');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', AdminController::class);
        Route::get('/admin', [AdminController::class, 'index']);
        //Route::get('logout', [AuthController::class, 'index'])->name('logout');
        //Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    });
    Route::group(['middleware' => ['cek_login:editor']], function () {
        //Route::resource('editor', AdminController::class);
    });
});



// Route::get('/admin-user', function () {
//     return view('admin/user');
// });

// Route::get('/admin-table', function () {
//     return view('admin/tables');
// });

// Route::get('/admin-typography', function () {
//     return view('admin/typography');
// });
