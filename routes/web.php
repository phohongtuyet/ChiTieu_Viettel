<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\LinhVucController; 
use App\Http\Controllers\YTeController; 
use App\Http\Controllers\GiaoDucController; 
use App\Http\Controllers\DuAnController; 
use App\Http\Controllers\KenhTruyenController; 
use App\Http\Controllers\ChiTieuController;
use App\Http\Controllers\ThucHienController;

Auth::routes();

Route::get('/', [HomeController::class, 'getHome'])->name('home');
Route::get('/chitieu', [ChiTieuController::class, 'getDanhSach'])->name('chitieu');
Route::get('/chitieu/them', [ChiTieuController::class, 'getThem'])->name('chitieu.them');
Route::post('/chitieu/them', [ChiTieuController::class, 'postThem'])->name('chitieu.them');
Route::get('/chitieu/sua/{id}', [ChiTieuController::class, 'getSua'])->name('chitieu.sua');
Route::post('/chitieu/sua/{id}', [ChiTieuController::class, 'postSua'])->name('chitieu.sua');
Route::get('/chitieu/xoa/{id}', [ChiTieuController::class, 'getXoa'])->name('chitieu.xoa');
Route::post('/chitieu/nhap', [ChiTieuController::class, 'postNhap'])->name('chitieu.nhap');

Route::get('/thuchien', [ThucHienController::class, 'getDanhSach'])->name('thuchien');
Route::get('/thuchien/them', [ThucHienController::class, 'getThem'])->name('thuchien.them');
Route::post('/thuchien/them', [ThucHienController::class, 'postThem'])->name('thuchien.them');
Route::get('/thuchien/sua/{id}', [ThucHienController::class, 'getSua'])->name('thuchien.sua');
Route::post('/thuchien/sua/{id}', [ThucHienController::class, 'postSua'])->name('thuchien.sua');
Route::get('/thuchien/xoa/{id}', [ThucHienController::class, 'getXoa'])->name('thuchien.xoa');
Route::post('/thuchien/nhap', [ThucHienController::class, 'postNhap'])->name('thuchien.nhap');
