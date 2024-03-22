<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ScholarController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/scholar',[ScholarController::class,'index'])->name('scholar.index');
Route::post('/scholar',[ScholarController::class,'store'])->name('scholar.store');
Route::get('/scholar/{scholar}/edit',[ScholarController::class,'edit'])->name('scholar.edit');
Route::put('/scholar/{scholar}/update',[ScholarController::class,'update'])->name('scholar.update');
Route::get('/scholar/{scholar}/index',[ScholarController::class,'account'])->name('scholar.account');
