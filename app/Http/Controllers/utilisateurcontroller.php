<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Utilisateur;
use App\Models\Tuteur;
use App\Models\Ville;
use App\Models\Nationalite;
use App\Models\Groupe_sanguin;

class utilisateurcontroller extends Controller
{
   public function liste_utilisateur() 
   {
       $utilisateurs = Utilisateur::all();
       return view('utilisateur.liste',compact('utilisateurs'));
   }
   public function  ajouter_utilisateur()
   {
       $tuteurs = Tuteur::all();
       $villes = Ville::all();
       $nationalites = Nationalite::all();
       $groupe_sanguins = Groupe_sanguin::all();
       $tuteurs = Tuteur::all();
       return view('utilisateur.ajouter', compact('tuteurs','villes','nationalites','groupe_sanguins'));
   }
   public function ajouter_utilisateur_traitement(Request $request)
   {
     $request->validate([
         'nom'=> 'required',
         'prenom'=> 'required',
         'email'=> 'required',
         'ville'=> 'required',
         'nationalite'=> 'required',
         'groupe_sanguin'=> 'required',
         'path'=> 'required',
         'tuteur'=> 'required',
     ]);
     $utilisateur = new Utilisateur();
     $utilisateur->nom = $request->nom;
     $utilisateur->prenom = $request->prenom;
     $utilisateur->email = $request->email;
     $utilisateur->ville_id = $request->ville;
     $utilisateur->nationalite_id = $request->nationalite;
     $utilisateur->groupe_sanguin_id = $request->groupe_sanguin;
     $utilisateur->path = $request->path;
     $utilisateur->tuteur_id = $request->tuteur;
     $utilisateur-> save();
     
     return redirect('/ajouter')->with('status', 'L\'utilisateur a bien été ajouter avec succes.');
   }
   
   public function update_utilisateur($id){
       
       
       
    $tuteurs = Tuteur::all();
    $villes = Ville::all();
    $nationalites = Nationalite::all();
    $groupe_sanguins = Groupe_sanguin::all();
    $tuteurs = Tuteur::all();
       $utilisateurs = Utilisateur::find($id);
       return view('utilisateur.update',compact('utilisateurs','villes','nationalites','groupe_sanguins','tuteurs'));
   }
   
   public function update_utilisateur_traitement(Request $request){
    $request->validate([
        'nom'=> 'required',
        'prenom'=> 'required',
        'email'=> 'required',
        'ville'=> 'required',
        'nationalite'=> 'required',
        'groupe_sanguin'=> 'required',
        'path'=> 'required',
        'tuteur'=> 'required',
    ]);
    $utilisateur = Utilisateur::find($request->id);
    $utilisateur->nom = $request->nom;
    $utilisateur->prenom = $request->prenom;
    $utilisateur->email = $request->email;
    $utilisateur->ville_id = $request->ville;
    $utilisateur->nationalite_id = $request->nationalite;
    $utilisateur->groupe_sanguin_id = $request->groupe_sanguin;
    $utilisateur->path = $request->path;
    $utilisateur->tuteur_id = $request->tuteur;
    // $utilisateur->tuteur = $request->tuteur_id;
    $utilisateur-> update();
    return redirect('/utilisateur')->with('status', 'L\'utilisateur a bien été modifié avec succes.');
   }
   
   public function delete_utilisateur($id){
       $utilisateur = Utilisateur::find($id);
       $utilisateur->delete();
       return redirect('/utilisateur')->with('status', 'L\'utilisateur a bien été supprimé avec succes.');
   }
}
