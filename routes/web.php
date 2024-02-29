<?php

use App\Http\Controllers\Admin\ComicController;
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

Route::get('/', function () {
    $firstName = 'Gino';
    $lastName = 'Paoli';

    /*
        compact: crea un array associativo le cui chiavi sono le stringhe
                 che mettiamo tra le parentesi, mentre i valori di tali
                 chiavi sono i valori delle variabili con i nomi corrispondenti
                 alle stringhe inserite

        compact('firstName', 'lastName')
         |                                     |
         V                                     V

         [
            'firstName' => $firstName,
            'lastName' => $lastName,
         ]
    */

    /*
        dd: vuol dire dump and die, cioè fai il var_dump (più carino però)
            e poi stoppa l'esecuzione
    */
    // dd(compact('firstName', 'lastName'));

    return view('welcome', [
        'firstName' => $firstName,
        'lastName' => $lastName,
    ]);
    // return view('welcome', compact('firstName', 'lastName'));
});

Route::get('/chi-siamo', function () {
    return view('subpages.about');
});

/* ----------- CRUD Comics ----------- */

Route::resource('comics', ComicController::class);

/* Read */

// Route::get('/comics', [ComicController::class,'index'])->name('comics.index');
// Route::get('/comics/(id)', [ComicController::class,'show'])->name('comics.index');

/* Create */

// Route::get('/comics/create', [ComicController::class,'create'])->name('comics.create');
// Route::post('/comics/add', [ComicController::class,'store'])->name('comics.store');

/* Update */

// Route::get('/comics/(id)/update', [ComicController::class,'edit'])->name('comics.edit');
// Route::put('/comics/(request)/(id)/update', [ComicController::class,'update'])->name('comics.update');

/* Delete */

// Route::delete('/comics/(id)/delete', [ComicController::class,'destroy'])->name('comics.destroy');

/* ----------- ---------- ----------- */

// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
