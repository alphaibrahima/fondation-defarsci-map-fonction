<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProblemeController;
use App\Http\Controllers\ProjetCrudController;
use App\Http\Controllers\ContribuezController;
use App\Models\Projet;
use App\Models\Probleme;


// Route::get('/', function () {
//     $data = Projet::with('probleme')->get();
//     return view('accueil', [
//         'datas' => $data
//     ]);
// });

Route::get('/', function(){
    return view('home');
});

// Route::get('/', function () {
//     return view('accueil');
// });

Route::get('/qui-somme-nous', function () {
    return view('qsn');
});

Route::get('/livemap', function () {
    return view('app');
});

Route::get('/mapbox', function () {
    return view('map');
});


Route::resource('problemes', ProblemeController::class);

Route::get('/projetlistes', [ProjetCrudController::class, 'index']);
Route::get('/ajout-projet', [ProjetCrudController::class, 'create']);
Route::post('/ajout-projet', [ProjetCrudController::class, 'store']);
Route::get('/edit-projet/{projet}', [ProjetCrudController::class, 'edit']);
Route::put('/edit-projet/{projet}', [ProjetCrudController::class, 'update']);
Route::delete('/sup-projet/{projet}', [ProjetCrudController::class, 'delete']);

Route::get('/projetlisteContribuez', [ContribuezController::class, 'index']);
Route::get('/projetlisteContribuez/details', [ContribuezController::class, 'details']);
Route::get('/projetlisteContribuez/contibution/{projet}', [ContribuezController::class, 'participation']);
Route::post('/participation', [ContribuezController::class, 'participationStore']);





