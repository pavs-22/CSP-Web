<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ScholarController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/scholar',[ScholarController::class,'index'])->name('scholar.index');
    Route::get('/scholar/info',[ScholarController::class,'info'])->name('scholar.info');
    //Route::get('/scholar/{scholar}/info',[ScholarController::class,'info'])->name('scholar.info');
    Route::get('/scholar/fetch-paginate',[ScholarController::class,'fetchPaginate'])->name('scholar.fetch-paginate');
    Route::post('/scholar',[ScholarController::class,'store'])->name('scholar.store');
    Route::get('/scholar/{scholar}/edit',[ScholarController::class,'edit'])->name('scholar.edit');
    Route::put('/scholar/{scholar}/update',[ScholarController::class,'update'])->name('scholar.update');
    Route::get('/scholar/{scholar}/index',[ScholarController::class,'account'])->name('scholar.account');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
