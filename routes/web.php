<?php

use App\Http\Controllers\WallController;
use App\Http\Controllers\CinemaController;
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

Route::get('/films',
    [CinemaController::class, 'index']
)->middleware(['auth'])->name('films');

//route du wall//

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    echo('Hello word');
});

Route::get('/dashboard',
    [WallController::class, 'index']
)->middleware(['auth'])->name('dashboard');

Route::post('/postMessage',
    [WallController::class, 'postMessage']
)->middleware(['auth'])->name('postMessage');

Route::get('/deleteMessage/{id}',
    [WallController::class, 'deleteMessage']
)->middleware(['auth'])->name('deleteMessage');

Route::get('/updateMessage/{id}',
    [WallController::class, 'updateMessage']
)->middleware(['auth'])->name('updateMessage');

Route::post('/updateMessage/{id}',
    [WallController::class, 'saveMessage']
)->middleware(['auth'])->name('saveMessage');

Route::get('/films/{id}',
    [CinemaController::class, 'ShowFilm']
)->middleware(['auth'])->name('ShowFilm');

Route::get('/genre/{id}',
    [CinemaController::class, 'ShowGenre']
)->middleware(['auth'])->name('ShowGenre');

Route::get('/distributeur/{id}',
    [CinemaController::class, 'ShowDistributeur']
)->middleware(['auth'])->name('ShowDistributeur');

require __DIR__.'/auth.php';
