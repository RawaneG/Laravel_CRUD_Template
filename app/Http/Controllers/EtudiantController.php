<?php

namespace App\Http\Controllers;

class EtudiantController extends Controller
{
    public function liste_etudiant()
    {
        return view('etudiant.liste');
    }
    public function ajout_etudiant()
    {
        return view('etudiant.ajout');
    }
    public function modification_etudiant()
    {
        return view('etudiant.modification');
    }
    public function suppression_etudiant()
    {
        return view('etudiant.suppression');
    }
}
