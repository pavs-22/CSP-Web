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

    Route::get('/scholar/ScholarList',[ScholarController::class,'ScholarList'])->name('scholar.ScholarList');
    Route::get('/scholar/college',[ScholarController::class,'college'])->name('scholar.college');
    Route::get('/scholar/highschool',[ScholarController::class,'highschool'])->name('scholar.highschool');
    Route::get('/scholar/seniorhigh',[ScholarController::class,'seniorhigh'])->name('scholar.seniorhigh');
    Route::get('/scholar.{id}/info', [ScholarController::class, 'show'])->name('scholar.info');
    Route::get('/scholar/fetch-paginate', [ScholarController::class, 'fetchPaginate'])->name('scholar.fetch-paginate');
    Route::get('/scholar/fetch-high-school', [ScholarController::class, 'fetchHighSchool'])->name('scholar.fetch-high-school');
    Route::get('/scholar/fetch-senior-high', [ScholarController::class, 'fetchSeniorHigh'])->name('scholar.fetch-senior-high');
    Route::get('/scholar/fetch-college', [ScholarController::class, 'fetchCollege'])->name('scholar.fetch-college');    
    Route::post('/scholar',[ScholarController::class,'store'])->name('scholar.store');
    Route::get('/scholar/{id}/edit',[ScholarController::class,'edit'])->name('scholar.edit');
    Route::put('/scholar/{id}/', [ScholarController::class, 'update'])->name('scholar.update');
    Route::put('/scholar/soft-delete/{id}', [ScholarController::class, 'softDelete'])->name('scholar.softDelete');




    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
