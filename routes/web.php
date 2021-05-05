<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructionLogController;
<<<<<<< HEAD
use App\Http\Controllers\SharedMaterials;
=======
use App\Http\Controllers\SavedMaterialController;
>>>>>>> 778e0e37b6739fbf1f90c8c229dc941b9a95e859
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
<<<<<<< HEAD

Route::resource('sharedmaterials', SharedMaterials::class);
=======
Route::resource('SavedMaterial', SavedMaterialController::class);
>>>>>>> 778e0e37b6739fbf1f90c8c229dc941b9a95e859
