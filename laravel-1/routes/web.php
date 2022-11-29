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

Route::get('/halo', function () {
    return 'Hallo guys!';
});

Route::get('/test', function () {
    echo "<h1>Test 1,2,3...</h1>";
    echo "<p>Laravel 9 berhasil dieksekusi</p>";
});

// alamat url di route bisa terdiri beberapa segmen seperti contoh di bawah ini
Route::get('/mahasiswa/fasilkom/anto', function () {
    echo '<h2 style="text-align: center"><u>Welcome Alby</u></h2>';
});
