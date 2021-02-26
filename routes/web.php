<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

Route::get('/test', function() {
    $x = 1;
    $y = 2;
    $z = 3;
    return $z;
});


Route::get('/info', function() {
    return phpinfo();
});

Auth::routes();
Route::get('/{any}', [FrontController::class, 'index'])->where('any', '.*');

