<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('form', function () {
    return view('form');
});

Route::post('store_data', [App\Http\Controllers\FormController::class, 'store_data']);

Route::get('records', [App\Http\Controllers\FormController::class, 'records']);

