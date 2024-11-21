<?php

use App\Http\Controllers\CampusController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\InscrireController;
use App\Http\Controllers\ModePaiementController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\PensionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('etudiant', EtudiantController::class);
    Route::resource('filiere', FiliereController::class);
    Route::resource('pension', PensionController::class);
    Route::resource('inscrire', InscrireController::class);
    Route::resource('modePaiement', ModePaiementController::class);
    Route::resource('paiement', PaiementController::class);
    Route::resource('campus', CampusController::class);


    Route::post('/import', [ImportController::class, 'import'])->name('import');
    Route::post('/importCampus', [ImportController::class, 'importCampus'])->name('importCampus');
    Route::post('/importFiliere', [ImportController::class, 'importFiliere'])->name('importFiliere');
});

require __DIR__.'/auth.php';
