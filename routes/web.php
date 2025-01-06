<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/sales-client', function () {
    return view('sales-client');
})->name('sales-client');

Route::get('/footer', function () {
    return view('footer');
})->name('footer');

Route::get('/sales-client-contract-view', function () {
    return view('sales-client-contract-view');
})->name('sales-client');

Route::get('/sales-client-view', function () {
    return view('sales-client-view');
})->name('sales-client-view');

Route::get('/sales-contract-list', function () {
    return view('sales-contract-list');
})->name('sales-contract-list');

// belum selesai bagian table
Route::get('/sales-new-client', function () {
    return view('sales-new-client');
})->name('sales-new-client');

Route::get('/management-dashboard', function () {
    return view('management-dashboard');
})->name('management-dashboard');

Route::get('/sales-contract-new', function () {
    return view('sales-contract-new');
})->name('sales-contract-new');

Route::get('/', function () {
    return view('front-page');
});
Route::get('/client', function () {
    return view('client-login');
})->name('client');

Route::get('/staff', function () {
    return view('staff-login');
})->name('staff');

Route::get('/admin-dashboard', function () {
    return view('admin-dashboard');
})->name('admin-dashboard');

Route::get('/client-dashboard', function () {
    return view('client-dashboard');
})->name('client-dashboard');

Route::get('/staff-information', function () {
    return view('staff-personal-information-form');
})->name('staff-information');

Route::get('/client-information', function () {
    return view('client-information-form');
})->name('client-information');

Route::get('/test', function () {
    return view('test');
})->name('test');