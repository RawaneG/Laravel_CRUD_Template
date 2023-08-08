<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function liste_etudiant()
    {
        $etudiants = Etudiant::all();
        return view('etudiant.liste', compact('etudiants'));
    }
    public function ajout_etudiant()
    {
        return view('etudiant.ajout');
    }
    public function modification_etudiant($id)
    {
        $etudiant = Etudiant::find($id);
        return view('etudiant.modification', compact('etudiant'));
    }
    public function creer_etudiant(Request $request)
    {
        $request->validate(
            [
                'nom' => 'required',
                'prenom' => 'required',
                'classe' => 'required',
            ]
        );
        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->save();

        return redirect('/')->with("status", "L'étudiant a été ajouté avec succès");
    }
    public function modifier_etudiant(Request $request)
    {
        $request->validate(
            [
                'nom' => 'required',
                'prenom' => 'required',
                'classe' => 'required',
            ]
        );
        $etudiant = Etudiant::find($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->update();

        return redirect('/')->with("status", "L'étudiant a été modifié avec succès");
    }
    public function supprimer_etudiant($id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('/')->with("status", "L'étudiant a été supprimé avec succès");
    }
}
