<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ProfileController;

Route::view('/', 'welcome')->name('HalamanWelcome');

Route::middleware('auth')->group(function () {
    Route::get('/books', [BookController::class, 'index'])->name('books.index');
    Route::get('/loans', [LoanController::class, 'index'])->name('loans.index');
    Route::get('/loans/{book}', [LoanController::class, 'create'])->name('loans.create');
    Route::post('/loans/{book}', [LoanController::class, 'store'])->name('loans.store');
    Route::get('/loans/terminate/{loan}', [LoanController::class, 'terminate'])->name('loans.terminate');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Pasien
    Route::get('/pasien', [PasienController::class, 'index'])->name('pasien');
    Route::get('/pasien-add', [PasienController::class, 'create'])->name('add_pasien');
    Route::post('/store', [PasienController::class, 'store'])->name('store');
    Route::get('/pasien/{noreg}', [PasienController::class, 'show'])->name('pasien_detail');
    Route::get('/pasien-edit/{noreg}', [PasienController::class, 'edit'])->name('pasien_edit');
    Route::put('/update/{id}', [PasienController::class, 'update'])->name('update');
    // Route::get('/pasien-delete/{id}', [PasienController::class, 'delete'])->name('pasien_delete');
    Route::delete('/destroy/{noreg}', [PasienController::class, 'destroy'])->name('destroy');
    // Route::get('/studelere', [PasienController::class, 'history']);
    // Route::get('/stulon/{id}/restore', [PasienController::class, 'restore']);
});

require __DIR__ . '/auth.php';