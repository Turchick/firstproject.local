<?php

use App\Http\Controllers\{NewsController, SessionController, RegisterController};
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

Route::get('/', [NewsController::class, 'index'])->name('home');
Route::get('/post/{post:slug}', [NewsController::class, 'show']);

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    Route::get('/login', [SessionController::class, 'show'])->name('login.show');
    Route::post('/login', [SessionController::class, 'attempt'])->name('login.attempt');
});

Route::post('/logout', [SessionController::class, 'destroy'])->name('logout')->middleware('auth');

