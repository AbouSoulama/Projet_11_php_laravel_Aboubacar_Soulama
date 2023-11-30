<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Poste;
use App\Models\Tag;

class PosteController extends Controller
{
    public function liste_poste() 
    {
        $postes = Poste::all();
        $tags = tag::all();
        return view('poste.liste',compact('postes','tags'));
    }
    
    public function  add_poste()
    {
        $tags = tag::all();
        $postes = Poste::all();
        return view('poste.add', compact('postes','tags',));
    }
    
    public function add_poste_traitement(Request $request)
    {
      $request->validate([
          'nom'=> 'required',
          'contenu'=> 'required',
      ]);
      $poste = new Poste();
      $poste->nom = $request->nom;
      $poste->contenu = $request->contenu;
    

      $poste-> save();
      
      $tags = $request->tag_id;
      
      $poste ->tags()->attach($tags);
      
      return redirect('/add')->with('status', 'L\'poste a bien été ajouter avec succes.');
    }
    
    
    public function del_poste($id){
        $poste = Poste::find($id);
        $poste ->delete();
        return redirect('/poste')->with('status', 'L\'poste a bien été supprimé avec succes.');
    }
}
