<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;

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