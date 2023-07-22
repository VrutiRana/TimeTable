<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\WorkingHoursController::class, 'index'])->name('working-hours');
Route::post('/store_workdays', [\App\Http\Controllers\WorkingHoursController::class, 'store']);
Route::post('/store_subjects', [\App\Http\Controllers\SubjectController::class, 'store']);
Route::get('/showData/{$id}', [\App\Http\Controllers\SubjectController::class,'index'])->name('showData');

