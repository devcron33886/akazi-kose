<?php

use App\Http\Controllers\AdvertController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmployerIndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowEmployerController;
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
})->name('home');

Route::get('/employers', EmployerIndexController::class)->name('employers');
Route::get('/employer/{employer:slug}', ShowEmployerController::class)->name('employers.show');
Route::get('/job/{job:slug}', AdvertController::class)->name('adverts.show');
Route::get('/contact-us',ContactController::class)->name('contact.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
