<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ConsultationController;
use App\Models\Consultation;

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

Route::get('/', [FrontEndController::class, 'index'])->name('home');
Route::get('about', [FrontEndController::class, 'about'])->name('about');
Route::get('services', [FrontEndController::class, 'services'])->name('services');
Route::get('blog', [FrontEndController::class, 'blog'])->name('blog');
Route::get('contact', [FrontEndController::class, 'contact'])->name('contact');
Route::post('contact', [ContactController::class, 'saveContactMessage'])->name('post-contact');
Route::post('/', [ConsultationController::class, 'consultations'])->name('post-consultations');
