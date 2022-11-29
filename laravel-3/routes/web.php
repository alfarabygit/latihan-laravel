<?php

namespace App\Http\Controllers; // sintaks utk memanggil file controller

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
// cara membuat controller di laravel 8 atau 9

Route::get('/', function () {
    return view('welcome');
});

Route::get('dosen', 'DosenController@index');
