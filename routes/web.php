<?php

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

Route::get('/statistiques', [NotesController::class, 'statistiques'])->name('statiques');;
Route::get('/notes/show', [NotesController::class, 'searchAndShow'])->name('notes.show');
