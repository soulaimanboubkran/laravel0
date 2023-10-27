<?php

use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/statistiques', [NotesController::class, 'statistiques']);
Route::get('/notes/show', [NotesController::class, 'searchAndShow'])->name('notes.show');
