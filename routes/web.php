<?php

use App\Models\Espace;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonController;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\ContactController; 
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\MediathequeController;
use App\Http\Controllers\EspaceCommunautaireController;

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

Route::get('', [HomeController::class, 'index'])->name('accueil.index');
Route::get('sitemap', [HomeController::class, 'sitemap']); 
Route::get('a-propos-de-nous/notre-equipe', [EquipeController::class,'index'])->name('equipe.index');
Route::get('a-propos-de-nous/notre-equipe/{id}', [EquipeController::class,'show'])->name('equipe.show');
Route::resource('a-propos-de-nous', EntrepriseController::class);
Route::resource('espace-communautaire', EspaceCommunautaireController::class);
Route::resource('nos-activites', ActiviteController::class);
Route::get('news/actualites', [ActualiteController::class,'index'])->name('actualites.index');
Route::get('news/actualites/{id}', [ActualiteController::class,'show'])->name('actualites.show');
Route::get('news/agenda', [AgendaController::class,'index'])->name('agenda.index');
Route::get('news/agenda/{id}', [AgendaController::class,'show'])->name('agenda.show');
Route::get('news/mediatheque', [MediathequeController::class,'index'])->name('mediatheque.index');
Route::get('news/mediatheque/{id}', [MediathequeController::class,'show'])->name('mediatheque.show');
Route::resource('dons', DonController::class);
Route::resource('contactez-nous', ContactController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
