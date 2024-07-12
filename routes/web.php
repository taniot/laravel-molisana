<?php

use App\Http\Controllers\Admin\PastaController;
use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

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

//rotta homepage
Route::get('/', [PageController::class, 'index'])->name('home');

// //risorsa pasta
// //elenco paste
// Route::get('/pastas', [PastaController::class, 'index']);
// //creazione paste -> pagina di gestione creazione paste
// //aggiornamento paste -> pagina di gestione aggiornamento paste
// //cancellazione paste

Route::resource('pastas', PastaController::class);
