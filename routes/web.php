<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\DestroyController;


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

Route::get('/', function () {
    return view('welcome');
});

// index
Route::get('/index', [IndexController::class, 'index'])->name('etudiants.index');

// create
Route::get('/etudiants-create', [CreateController::class, 'create'])->name('etudiants.create');

// rajouter dans la bd
Route::post('/etudiants-create', [CreateController::class, 'store'])->name('etudiants.create');

// show
Route::get('/etudiants-show/{etudiant}', [ShowController::class, 'show'])->name('etudiants.show');

// modifier
Route::get('/etudiants-edit/{etudiant}', [EditController::class, 'edit'])->name('etudiants.edit');

// update le changement sur la bd
Route::put('/etudiants-edit/{etudiant}', [EditController::class, 'update'])->name('etudiants.edit');

// delete
Route::delete('/etudiants-destroy/{etudiant}', [DestroyController::class, 'destroy']);
