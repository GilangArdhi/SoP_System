<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MidtransController;
use App\Http\Controllers\MenuController;

Route::get('/', [MenuController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'adminDashboard']);
Route::post('/cash-payment', [CartController::class, 'paymentTransaction']);
Route::post('/midtrans/transaction', [MidtransController::class, 'createTransaction']);
Route::post('/midtrans/notification', [MidtransController::class, 'notificationHandler']);
Route::get('/chart-data', [AdminController::class, 'getChartData']);
Route::get('/chart-weekly', [AdminController::class, 'getWeeklyData']);