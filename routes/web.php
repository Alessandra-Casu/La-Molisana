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

// ROTTE DELLA RISORSA PASTA
// ATTENZIONE che l'ordine è importante:

// Route::get('/pastas',               [PastaController::class, 'index'] )->name('pastas.index');
// Route::get('/pastas/create',        [PastaController::class, 'create'])->name('pastas.create');
// Route::get('/pastas/{pasta}',       [PastaController::class, 'show'])->name('pastas.show');
// Route::get('/pastas/{pasta}/edit',  [PastaController::class, 'edit'])->name('pastas.edit');
// Route::post('/pastas',              [PastaController::class, 'store'])->name('pastas.store');
// Route::put('/pastas/{pasta}',       [PastaController::class, 'update'])->name('pastas.update');
// Route::delete('/pastas/{pasta}',    [PastaController::class, 'destroy'])->name('pastas.destroy');

Route::resource('pastas', PastaController::class);