<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProblemeController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ProjetCrudController;
use App\Http\Controllers\ContribuezController;

// Routes d'accueil et de présentation
Route::get('/', function () {
    return view('home');
});

Route::get('/qui-somme-nous', function () {
    return view('qsn');
});

// Map des projets
Route::get('/livemap', function () {
    return view('app');
});

// Déclaration de problèmes (conserver cette fonctionnalité publique)
Route::resource('problemes', ProblemeController::class);

// Redirection des routes de gestion de projets vers Filament
Route::get('/projetlistes', function () {
    return redirect('/admin/projets');
})->name('projets.index');

Route::get('/ajout-projet', function () {
    return redirect('/admin/projets/create');
});

Route::get('/edit-projet/{id}', function ($id) {
    return redirect("/admin/projets/{$id}/edit");
});

Route::delete('/sup-projet/{id}', function ($id) {
    return redirect("/admin/projets");
});

// Conserver les routes pour l'affichage public des projets
Route::get('/projetlisteContribuez', [ContribuezController::class, 'index']);
Route::get('/projetlisteContribuez/details/{id}', [ContribuezController::class, 'details']);
Route::get('/projetlisteContribuez/contibution/{id}', [ContribuezController::class, 'participation']);
Route::post('/participation', [ContribuezController::class, 'participationStore']);

// Conserver la route API pour la carte
Route::get('/api/projets', [ProjetController::class, 'index']);