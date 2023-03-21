<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

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

Route::get('/', [LanguageController::class, 'index']);
Route::get('/navbar', [LanguageController::class, 'navbar']);
Route::get('/footer', [LanguageController::class, 'footer']);
Route::get('/pricing', [LanguageController::class, 'pricing']);
Route::get('/contact', [LanguageController::class, 'contact']);
Route::get('/login', [LanguageController::class, 'login']);
Route::get('/signup', [LanguageController::class, 'signup']);
Route::get('/usecases', [LanguageController::class, 'usecases']);
Route::get('/templates', [LanguageController::class, 'templates']);
Route::get('/change', [LanguageController::class, 'change'])->name('changeLang');