<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\API\OutletController;
use App\Http\Controllers\API\UserController;


Route::post('/login', [LoginController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::resource('/outlets', OutletController::class)->except(['show']);
    Route::resource('/couriers', UserController::class)->except(['create', 'show', 'update']);
    Route::post('/couriers/{id}', [UserController::class, 'update'])->name('couriers.update');
});
