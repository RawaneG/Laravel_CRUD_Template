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
Route::get("/modifier", [EtudiantController::class, "modification_etudiant"]);
Route::get("/supprimer", [EtudiantController::class, "suppression_etudiant"]);
