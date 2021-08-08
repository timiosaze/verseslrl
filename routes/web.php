<?php

use App\Http\Controllers\VerseController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/verses', [VerseController::class, 'index']);
Route::post('/verses', [VerseController::class, 'store'])->name('verses.store');
Route::get('/verses/{id}/edit', [VerseController::class, 'edit'])->name('verses.edit');
Route::put('/verses/{id}', [VerseController::class, 'update'])->name('verses.update');
Route::delete('/verses/{id}', [VerseController::class, 'destroy'])->name('verses.destroy');
require __DIR__.'/auth.php';
