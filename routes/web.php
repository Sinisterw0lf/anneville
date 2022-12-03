<?php

use App\Models\Articles;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticlesController;

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
// Index page
Route::get('/', [ArticlesController::class, 'index'])->name('index');
// all routes from articles controller
Route::resource('articles', ArticlesController::class);

Route::get('/all-articles', [ArticlesController::class, 'allArticles'])->name('articles.all');

Route::get('/actualités', [ArticlesController::class, 'actualites'])->name('actualités');
Route::get('/agenda', [ArticlesController::class, 'agendas'])->name('agenda');
Route::get('/cadredevie', [ArticlesController::class, 'cadredevies'])->name('cadredevie');
Route::get(
    '/mairie',
    [ArticlesController::class, 'mairies']
)->name('mairie');
Route::get(
    '/liens',
    [ArticlesController::class, 'liens']
)->name('liens');

Route::resource('users', UserController::class);
Route::get('/all-users', [UserController::class, 'allUsers'])->name('users.all');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
