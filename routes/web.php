<?php

use App\Http\Controllers\AdvertController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmployerIndexController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ShowEmployerController;
use App\Http\Controllers\StoreContactController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', WelcomeController::class)->name('home');
Route::get('/employers', EmployerIndexController::class)->name('employers');
Route::get('/employer/{employer:slug}', ShowEmployerController::class)->name('employers.show');
Route::get('/job/{job:slug}', AdvertController::class)->name('adverts.show');
Route::get('/jobs/{category:slug}', CategoryController::class)->name('category.show');
Route::get('/contact-us', ContactController::class)->name('contact.index');
Route::post('/contact', StoreContactController::class)->name('contact.store');
Route::get('/faqs', FaqController::class)->name('faqs');
Route::view('/about-us', 'about.index')->name('about-us');
