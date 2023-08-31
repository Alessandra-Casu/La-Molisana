<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\Guest\PastaController;

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

Route::get('/',                     [PageController::class, 'home'])->name('home');
Route::get('/about',                [PageController::class, 'about'])->name('about');

//rotte della risorsa pasta
// Route::get('/pastas',               [PastaController::class, 'index'] )->name('pastas.index');
// Route::get('/pastas/{pasta}',       [PastaController::class, 'show'])->name('pastas.show');

Route::resource('pastas', PastaController::class);