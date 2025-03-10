<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MidtransController;
use App\Http\Controllers\MenuController;

Route::get('/', [MenuController::class, 'index']);
Route::post('/cash-payment', [CartController::class, 'paymentTransaction']);
Route::post('/midtrans/transaction', [MidtransController::class, 'createTransaction']);
Route::post('/midtrans/notification', [MidtransController::class, 'notificationHandler']);
