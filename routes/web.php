<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('contact', [MainController::class, 'contact'])->name('contact');
Route::post('contact', [MainController::class, 'send_email'])->name('send.email');

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


require __DIR__.'/auth.php';
