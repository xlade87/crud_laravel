<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ClientController;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::resource('products', ProductController::class);
Route::resource('clients', ClientController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('students', StudentController::class);