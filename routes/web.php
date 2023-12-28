<?php

use App\Http\Controllers\PrimaryController;
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

Route::get('/', [PrimaryController::class, 'index']);

Route::post('/undi', [PrimaryController::class, 'undi']);

Route::prefix('/admin')->group(function () {
    Route::get('/mahasiswa', function () {
        return "Ini halaman Mahasiswa";
    });
});

Route::get('/test', function () {
    return view('undi', ['title' => 'Selamat 🎁']);
});
