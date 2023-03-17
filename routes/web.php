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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/', [LanguageController::class, 'index']);
Route::get('/navbar', [LanguageController::class, 'navbar']);
Route::get('/footer', [LanguageController::class, 'footer']);
Route::get('/footer', [LanguageController::class, 'pricing']);
Route::get('/change', [LanguageController::class, 'change'])->name('changeLang');