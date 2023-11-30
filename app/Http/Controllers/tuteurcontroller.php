<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Tuteur;
use App\Models\Utilisateur;
use App\Models\Ville;
use App\Models\Nationalite;
use App\Models\Groupe_sanguin;

class tuteurcontroller extends Controller
{
    public function liste_tuteur() 
   {
       $tuteurs = Tuteur::all();
       return view('tuteur.liste',compact('tuteurs'));
   }
   public function  ajout_tuteur()
   {
       return view('tuteur.ajout');
   }
   public function ajout_tuteur_traitement(Request $request)
   {
     $request->validate([
         'nom'=> 'required',
         'prenom'=> 'required',
         'profession'=> 'required',
         'contact'=> 'required',
        //  'utilisateur'=> 'required',
     ]);
     $tuteur = new Tuteur();
     $tuteur->nom = $request->nom;
     $tuteur->prenom = $request->prenom;
     $tuteur->profession = $request->profession;
     $tuteur->contact = $request->contact;
     $tuteur-> save();

     return redirect('/ajout')->with('status', 'L\'tuteur a bien été ajouter avec succes.');
    }
    
    public function updat_tuteur($id){
        $tuteurs = Tuteur::find($id);
        
        
        return view('tuteur.updat',compact('tuteurs'));
    }
    
    public function updat_tuteur_traitement(Request $request){
     $request->validate([
         'nom'=> 'required',
         'prenom'=> 'required',
         'profession'=> 'required',
         'contact'=> 'required',
        //  'tuteur'=> 'required',
     ]);
    
     $tuteur = Tuteur::find($request->id);
     $tuteur->nom = $request->nom;
     $tuteur->prenom = $request->prenom;
     $tuteur->profession = $request->profession;
     $tuteur->contact = $request->contact;
     $tuteur-> update();
     return redirect('/tuteur')->with('status', 'L\'tuteur a bien été modifié avec succes.');
    }
    
    public function delete_tuteur($id)
    {
        $tuteur = Tuteur::find($id);
        $tuteur->delete();
        return redirect('/tuteur')->with('status', 'L\'tuteur a bien été supprimé avec succes.');
    }
}
   

