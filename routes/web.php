<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mime\Part\Multipart\FormDataPart;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/dashboard', [FormController::class, 'index'])->middleware(['auth'])->name('show-all');
Route::get('/formulir', [FormController::class, 'input'])->middleware(['auth'])->name('formulir');
Route::post('/input-form', [FormController::class, 'create'])->middleware(['auth'])->name('proses-form');

require __DIR__.'/auth.php';
