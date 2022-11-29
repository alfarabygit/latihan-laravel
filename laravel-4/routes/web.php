<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController; // sintaks utk memanggil controller utk laravel versi 8 dan terbaru
//cara ini dibilang singkat dibanding yang sebelumnya, karena menggunakan keyword use.
//hanya saja harus sering berlatih utk menguasai routing laravel versi 8 dan terbarunya

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

Route::get('/dosen', [DosenController::class, 'index']);//ini juga utk laravel versi 8 dan terbaru
