<?php

use App\Http\Controllers\AnnoncesController;
use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


Route::get('/', function () {
    return view('home');
});


Route::get('/contact', function () {
    return view('contacts');
})->name('contact');



Route::get('/annonces', [AnnoncesController::class, 'index'])->name('annonces.index');

// Display the form to create a new annonce
Route::get('/annonces/create', [AnnoncesController::class, 'create'])->name('annonces.create');

// Store a new annonce in the database
Route::post('/annonces', [AnnoncesController::class, 'store'])->name('annonces.store');

// Display the details of a specific annonce
Route::get('/annonces/{annonce}', [AnnoncesController::class, 'show'])->name('annonces.show');

// Display the form to edit an existing annonce
Route::get('/annonces/{annonce}/edit', [AnnoncesController::class, 'edit'])->name('annonces.edit');

// Update an existing annonce in the database
Route::put('/annonces/{annonce}', [AnnoncesController::class, 'update'])->name('annonces.update');

// Delete an existing annonce
Route::delete('/annonces/{annonce}', [AnnoncesController::class, 'destroy'])->name('annonces.destroy');