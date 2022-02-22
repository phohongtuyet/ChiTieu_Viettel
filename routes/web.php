<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\LinhVucController; 
use App\Http\Controllers\YTeController; 
use App\Http\Controllers\GiaoDucController; 
use App\Http\Controllers\DuAnController; 
use App\Http\Controllers\KenhTruyenController; 
use App\Http\Controllers\ChiTieuController;

Auth::routes();

Route::get('/', [HomeController::class, 'getHome'])->name('home');
Route::get('/chitieu', [ChiTieuController::class, 'getDanhSach'])->name('chitieu');
Route::get('/chitieu/them', [ChiTieuController::class, 'getThem'])->name('chitieu.them');
Route::post('/chitieu/them', [ChiTieuController::class, 'postThem'])->name('chitieu.them');

Route::get('/kenhtruyen', [KenhTruyenController::class, 'getDanhSach'])->name('kenhtruyen');
Route::post('/kenhtruyen/nhap', [KenhTruyenController::class, 'postNhap'])->name('kenhtruyen.nhap');

Route::get('/yte', [YTeController::class, 'getDanhSach'])->name('yte');
Route::post('/yte/nhap', [YTeController::class, 'postNhap'])->name('yte.nhap');

Route::get('/giaoduc', [GiaoDucController::class, 'getDanhSach'])->name('giaoduc');
Route::post('/giaoduc/nhap', [GiaoDucController::class, 'postNhap'])->name('giaoduc.nhap');

Route::get('/duan', [DuAnController::class, 'getDanhSach'])->name('duan');
Route::post('/duan/nhap', [DuAnController::class, 'postNhap'])->name('duan.nhap');


