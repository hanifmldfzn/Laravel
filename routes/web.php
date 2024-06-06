<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;


Route::get('/', function () {
    return view('welcome');
});
//route menggunakan get berati meangambil fungsi didalam controller
//route menggunakan resources berarti mengambil class
//route dengan menggunakan name atau by name
route::get('/admin', [AdminController::class, 'index']);

// praktikum laravel ke 3
route::get('/admin/kelurahan', [KelurahanController::class, 'index']);
route::get('/admin/pasien', [PasienController::class, 'index']);

// praktikum laravel ke 4
route::get('/admin/kelurahan/create', [KelurahanController::class, 'create']);
route::post('/admin/kelurahan/store', [KelurahanController::class, 'store']);
route::get('/admin/kelurahan/show/{id}', [KelurahanController::class, 'show']);

// praktikum laravel ke 5
route::get('/admin/kelurahan/edit/{id}', [KelurahanController::class, 'edit']);
route::put('/admin/kelurahan/update/{id}', [KelurahanController::class, 'update']);
route::delete('/admin/kelurahan/destory/{id}', [KelurahanController::class, 'destory']);
