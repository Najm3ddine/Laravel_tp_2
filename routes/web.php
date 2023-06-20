<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\DestroyController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\ArticleController;


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
})->name('welcome')->middleware('auth');

// index
Route::get('/index', [IndexController::class, 'index'])->name('etudiants.index')->middleware('auth');

// create
Route::get('/etudiants-create', [CreateController::class, 'create'])->name('etudiants.create')->middleware('auth');

// rajouter dans la bd
Route::post('/etudiants-create', [CreateController::class, 'store'])->name('etudiants.create')->middleware('auth');

// show
Route::get('/etudiants-show/{etudiant}', [ShowController::class, 'show'])->name('etudiants.show')->middleware('auth');

// modifier
Route::get('/etudiants-edit/{etudiant}', [EditController::class, 'edit'])->name('etudiants.edit')->middleware('auth');

// update le changement sur la bd
Route::put('/etudiants-edit/{etudiant}', [EditController::class, 'update'])->name('etudiants.edit')->middleware('auth');

Route::delete('/etudiants-destroy/{etudiant}', [DestroyController::class, 'destroy'])->middleware('auth');

// langue
Route::get('lang/{locale}', [LocalizationController::class, 'index'])->name('lang');


Route::get('registration', [CustomAuthController::class, 'create'])->name('registration');

Route::post('registration', [CustomAuthController::class, 'store']);

Route::get('login', [CustomAuthController::class, 'index'])->name('login');

Route::post('login', [CustomAuthController::class, 'authentication'])->name('login.authentication');

Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');

Route::get('forgot-password', [CustomAuthController::class, 'forgotPassword'])->name('forgot.password');

Route::post('forgot-password', [CustomAuthController::class, 'tempPassword']);

Route::get('new-password/{user}/{tempPassword}', [CustomAuthController::class, 'newPassword'])->name('new.password');

Route::put('new-password/{user}/{tempPassword}', [CustomAuthController::class, 'storeNewPassword']);


// les articles
Route::get('blog', [ArticleController::class, 'index'])->name('blog.index')->middleware('auth');
Route::get('blog/{blogPost}', [ArticleController::class, 'show'])->name('blog.show')->middleware('auth');
Route::get('blog-create', [ArticleController::class, 'create'])->name('blog.create')->middleware('auth');
Route::post('blog-create', [ArticleController::class, 'store'])->middleware('auth');
Route::get('blog-edit/{blogPost}', [ArticleController::class, 'edit'])->name('blog.edit')->middleware('auth');
Route::put('blog-edit/{blogPost}', [ArticleController::class, 'update'])->middleware('auth');
Route::delete('blog/{blogPost}', [ArticleController::class, 'destroy'])->middleware('auth');
