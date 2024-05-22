<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelurahanController;

Route::get('/', function () {
    return view('welcome');
});
//route menggunakan get berati meangambil fungsi didalam controller
//route menggunakan resources berarti mengambil class
//route dengan menggunakan name atau by name
route::get('/admin', [AdminController::class, 'index']);

// praktikum laravel ke 3
route::get('/admin/kelurahan', [KelurahanController::class, 'index']);
