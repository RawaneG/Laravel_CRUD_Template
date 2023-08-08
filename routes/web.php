<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

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

Route::get("/", [EtudiantController::class, "liste_etudiant"]);
Route::get("/ajouter", [EtudiantController::class, "ajout_etudiant"]);
Route::get("/supprimer/{id}", [EtudiantController::class, "supprimer_etudiant"]);
Route::post("/ajouter/traitement", [EtudiantController::class, "creer_etudiant"]);
Route::get("/modifier/{id}", [EtudiantController::class, "modification_etudiant"]);
Route::post("/modifier/traitement", [EtudiantController::class, "modifier_etudiant"]);
