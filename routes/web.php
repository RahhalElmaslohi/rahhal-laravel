<?php

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

Route::get('/', function () {return view('auth.index');});


use App\Http\Controllers\ForumPostController ;
use App\Http\Controllers\VilleController ;
use App\Http\Controllers\EtudientController;
use App\Http\Controllers\FichierController;

Route::get('/home', [EtudientController::class, 'welcome']);
Route::get('etudient', [EtudientController::class, 'index'])->name('blog.index')->middleware('auth');
Route::get('etudient/{etudient}', [EtudientController::class, 'show'])->name('blog.show');

Route::get('blog-create',  [EtudientController::class, 'create'])->name('blog.create');
Route::post('blog-create', [EtudientController::class, 'store']);


Route::get('blog-edit/{etudient}', [EtudientController::class, 'edit'])->name('blog.edit');
Route::put('blog-edit/{etudient}', [EtudientController::class, 'update']);

Route::delete('blog-edit/{etudient}', [EtudientController::class, 'destroy']);

Route::get('forum', [ForumPostController::class, 'index'])->name('forum.index')->middleware('auth');
Route::get('forum/{forumPost}', [ForumPostController::class, 'show'])->name('forum.show')->middleware('auth');
Route::get('forum-create', [ForumPostController::class, 'create'])->name('forum.create')->middleware('auth');
Route::post('forum-create', [ForumPostController::class, 'store'])->name('forum.store')->middleware('auth');
Route::get('forum-edit/{forumPost}', [ForumPostController::class, 'edit'])->name('forum.edit')->middleware('auth');
Route::put('forum-edit/{forumPost}', [ForumPostController::class, 'update'])->middleware('auth');
Route::delete('forum-edit/{forumPost}', [ForumPostController::class, 'destroy'])->middleware('auth');

//test eloquent
Route::get('query', [ForumPostController::class, 'query']);
Route::get('page', [ForumPostController::class, 'page']);


use App\Http\Controllers\CustomAuthController;

Route::get('registration', [CustomAuthController::class, 'create'])->name('user.create');
Route::post('registration', [CustomAuthController::class, 'store'])->name('user.store');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('login', [CustomAuthController::class, 'authentication'])->name('user.auth');
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');

Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');

Route::get('forgot-password', [CustomAuthController::class, 'forgotPassword'])->name('forgot.pass');
Route::post('forgot-password', [CustomAuthController::class, 'tempPassword'])->name('temp.pass');
Route::get('new-password/{user}/{tempPassword}', [CustomAuthController::class, 'newPassword'])->name('new.pass');

Route::get('/fichier', [FichierController::class, 'index'])->name('fichier.index')->middleware('auth');;
Route::get('fichier-add', [FichierController::class, 'create'])->name('fichier.create')->middleware('auth');
Route::post('fichier-add', [FichierController::class, 'store'])->name('fichier.store')->middleware('auth');
Route::put('fichier-edit/{fichier}', [FichierController::class, 'update'])->middleware('auth');
Route::delete('fichier-edit/{fichier}', [FichierController::class, 'destroy'])->middleware('auth');

use App\Http\Controllers\LocalizationController;
Route::get('/lang/{locale}', [LocalizationController::class, 'index'])->name('lang');
