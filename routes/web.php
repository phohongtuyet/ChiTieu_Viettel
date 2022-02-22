<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\LinhVucController; 

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

Auth::routes();

Route::get('/', [HomeController::class, 'getHome'])->name('home');
Route::get('/chitieu', [LinhVucController::class, 'getDanhSach'])->name('chitieu');
Route::post('/chitieu/nhap', [LinhVucController::class, ' postNhap'])->name('chitieu.nhap');

