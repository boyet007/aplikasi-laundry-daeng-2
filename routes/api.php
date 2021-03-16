<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\API\OutletController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\RolePermissionController;
use App\Http\Controllers\API\ExpensesController;
use App\Http\Controllers\API\CustomerController;
use App\Http\Controllers\API\TransactionController;

use App\Http\Controllers\API\NotificationController;

Route::post('/login', [LoginController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::resource('/outlets', OutletController::class)->except(['show']);
    Route::resource('/couriers', UserController::class)->except(['create', 'show', 'update']);
    Route::post('/couriers/{id}', [UserController::class, 'update'])->name('couriers.update');
    Route::resource('/product', ProductController::class)->except(['create', 'show']);
    Route::get('/product/laundry-type', [ProductController::class, 'getLaundryType']);
    Route::post('/product/laundry-type', [ProductController::class, 'storeLaundryType']);

    Route::get('roles', [RolePermissionController::class, 'getAllRole'])->name('roles');
    Route::get('permissions', [RolePermissionController::class, 'getAllPermission'])->name('permission');
    Route::post('role-permission', [RolePermissionController::class, 'getRolePermission'])->name('role_permission');
    Route::post('set-role-permission', [RolePermissionController::class, 'setRolePermission'])->name('set_role_permission');
    Route::post('set-role-user', [RolePermissionController::class, 'setRoleUser'])->name('user.set_role');

    Route::get('user-authenticated', [UserController::class, 'getUserLogin'])->name('user.authenticated');
    Route::get('user-lists', [UserController::class, 'userLists'])->name('user.index');

    Route::resource('expenses', ExpensesController::class)->except(['create', 'show']);
    Route::resource('notification', NotificationController::class)->except(['create', 'destroy']);

    Route::post('expenses/accept', [ExpensesController::class, 'accept'])->name('expenses.accept');
    Route::post('expenses/cancel', [ExpensesController::class, 'cancelRequest'])->name('expenses.cancel');

    Route::resource('customer', CustomerController::class)->except(['create', 'show']);
    Route::resource('transaction', TransactionController::class)->except(['create', 'show']);
});


