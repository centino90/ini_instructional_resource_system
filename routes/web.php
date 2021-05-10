<?php

use App\Http\Controllers\AllFiles;
use App\Http\Controllers\SubjectsController;
use Illuminate\Support\Facades\Route;

/* Models */
use App\Models\Subject;
use App\Models\InstructionalResource;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {

    $IRs = InstructionalResource::orderByDesc('created_at')
        ->take(4)
        ->get();

    return view('dashboard')
        ->with('instructionals', $IRs)
        ->with('subjects', Subject::all())
        ->with('title', 'home');
})->middleware(['auth'])->name('dashboard');

/* Subjects */
Route::resource('subjects', SubjectsController::class)->middleware(['auth']);

/* All Files */
Route::resource('allFiles', AllFiles::class)->middleware(['auth']);
Route::post('allFiles/loadMoreFiles/{amount?}', [AllFiles::class, 'loadMoreFiles'])->middleware(['auth'])->name('allFiles.loadMoreFiles');



require __DIR__ . '/auth.php';
