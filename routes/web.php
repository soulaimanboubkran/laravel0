<?php

use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/contact', function () {
    return view('contacts');
})->name('contact');

Route::get('/statistiques', [NotesController::class, 'statistiques'])->name('statiques');;
Route::get('/notes/show', [NotesController::class, 'searchAndShow'])->name('notes.show');
