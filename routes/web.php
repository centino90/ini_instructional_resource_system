<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructionLogController;
use App\Http\Controllers\SavedMaterialController;
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

require __DIR__ . '/auth.php';

// Authentications
Route::get('/', function () {
    return view('auth.login');
});

// Pages
Route::get('/dashboard', function () {
    return view('pages.dashboard')->with("currentPage", "Dashboard");
})->middleware(['auth'])->name('dashboard');

/* STARTING POINT */
Route::resource('instructionlog', InstructionLogController::class);
Route::resource('SavedMaterial', SavedMaterialController::class);