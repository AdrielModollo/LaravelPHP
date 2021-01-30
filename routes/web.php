<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aplicação para web routes 
|
*/

Route::get('/', function () {
    return view('index');
});
