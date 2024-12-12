<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return "test";
});

Route::get('/prashant', function () {
    return "test";
});

Route::get('employees', [EmployeeController::class, 'index'])->name('index-company');
