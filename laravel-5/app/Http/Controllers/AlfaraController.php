<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlfaraController extends Controller
{
    //membuat function index

    public function index()
    {
        return view('alfara'); //memanggil nama viewnya di direktori app/resource/views/alfara.blade.php
    }
}
