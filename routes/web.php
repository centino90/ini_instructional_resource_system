<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructionLogController;

use App\Http\Controllers\SharedMaterials;

use App\Http\Controllers\SavedMaterialController;

use App\Http\Controllers\SyllabusController;
use App\Http\Controllers\ExamsController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\QuizzesController;
use App\Http\Controllers\AssignmentsController;

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

/* Rocky Calo */
Route::resource('instructionlog', InstructionLogController::class);

Route::resource('SavedMaterial', SavedMaterialController::class);
Route::resource('Syllabus', SyllabusController::class);
Route::resource('Exams', ExamsController::class);
Route::resource('Activities', ActivitiesController::class);
Route::resource('Quizzes', QuizzesController::class);
Route::resource('Assignments', AssignmentsController::class);

Route::resource('sharedmaterials', SharedMaterials::class);

Route::resource('SavedMaterial', SavedMaterialController::class);

