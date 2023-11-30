<?php

namespace App\Models;

use App\Models\Utilisateur;
use App\Models\Tuteur;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuteur extends Model
{
    use HasFactory;
    
   public function utilisateurs()
   {
       
       return $this->hasMany(Utilisateur::class); 
       
   } 
   
}
