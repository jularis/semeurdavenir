<?php

use App\Models\Espace;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\EspaceCommunautaireController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\ContactController; 
use App\Http\Controllers\FormationController;
use App\Http\Controllers\EntrepriseController;

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
Route::resource('a-propos-de-nous', EntrepriseController::class);
Route::resource('espace-communautaire', EspaceCommunautaireController::class);
Route::resource('nos-activites', ActiviteController::class);
Route::resource('nos-formations', FormationController::class);
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
