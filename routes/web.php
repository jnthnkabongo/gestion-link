<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\UsersController;
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

Route::get('/', [AuthController::class, 'index'])->name('page-accueil');
Route::post('/', [AuthController::class, 'login'])->name('login');
Route::get('redirects', [HomeController::class, 'index'])->name('redirect');
Route::get('deconnexion', [AuthController::class, 'destroy'])->name('logout');

Route::get('liste-liens-admin', [AdminController::class, 'systemsData'])->name('index-systems');

Route::get('filtre-liens', [AdminController::class, 'filtreLiens'])->name('index-filtre');
Route::get('recherche', [AdminController::class, 'rechercheLiens'])->name('index-recherche');
Route::get('formulaire-ajout', [AdminController::class, 'formulaireAjout'])->name('ajouter-lien');
Route::post('ajout-lien', [AdminController::class, 'soumission'])->name('soummission-ajout');
Route::get('suppression-liens-{itemsystem}',[AdminController::class, 'suppresionLien'])->name('suppression-lien');
Route::get('formulaire-modification-{itemsystem}', [AdminController::class, 'modifierLien'])->name('modifier-lien');
Route::get('soumission-modification-{itemsystem}', [AdminController::class, 'modifierLiens'])->name('soumission-modification');
Route::get('liste-manager', [AdminController::class, 'listeManager'])->name('liste-manager');
Route::get('create-manager', [AdminController::class, 'create'])->name('creation-manager');
Route::post('soumission-manager', [AdminController::class, 'store'])->name('soumission-manager');
Route::get('modification-manager-{itemManager}', [AdminController::class, 'modidifcationManager'])->name('affichage-modification-manager');
Route::get('modifications-manager-{itemManager}', [AdminController::class, 'soumission_modifcation_manager'])->name('soumission-modification-manager');
Route::get('suppression-manager-{itemManager}', [AdminController::class, 'suppremer_manager'])->name('supprimer-manager');
Route::get('liste-departement', [AdminController::class, 'liste_departement'])->name('liste-departement');
Route::post('soumission-responsable', [AdminController::class, 'creer_responsable'])->name('soumission-responsable');
Route::get('supprimer-responsable', [AdminController::class, 'supprimer_responsable'])->name('suppression-responsable');
Route::get('soumission-departement', [AdminController::class, 'creer_departement'])->name('soumission-departement');
Route::get('supprimer-departement', [AdminController::class, 'suppimer_departement'])->name('supprimer-departement');

Route::get('liste-liens', [ManagerController::class, 'index'])->name('index-manager');
Route::get('formulaire-creation-lien', [ManagerController::class, 'create'])->name('affichage-formulaire-manager');
Route::post('creation-lien-manager', [ManagerController::class,'store'])->name('soumission-lien-manager');
Route::get('filtre-manager' ,[ManagerController::class, 'edit'])->name('filtre-manager');
Route::get('recherche-manager' ,[ManagerController::class, 'show'])->name('recherche-manager');

Route::get('users-liste', [UsersController::class, 'systemsDataUser'])->name('user-liste-liens');
Route::get('users-filtre', [UsersController::class, 'filtreLiensUser'])->name('user-filtre-liens');
Route::get('users-recherche', [UsersController::class, 'rechercheLiensUser'])->name('user-recherche-liens');
Route::get('mon-profil-{id}', [UsersController::class, 'profil'])->name('user-profil');
