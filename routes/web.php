<?php

use App\Http\Controllers\CalculatriceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/calculatrice',[CalculatriceController::class,'index'])->name('calcultrice.index');
Route::post('/calculatrice', [CalculatriceController::class, 'calculer'])->name('calculatrice.calculer');
