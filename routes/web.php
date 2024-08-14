<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TranslateController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/request', [TranslateController::class, 'translate_func'])->name('store');
