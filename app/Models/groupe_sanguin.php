<?php

namespace App\Models;
use App\Models\Utilisateur;
use App\Models\Tuteur;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class groupe_sanguin extends Model
{
    use HasFactory;
    
     public function groupe_sanguins()
   {
       
       return $this->hasMany(Groupe_sanguin::class); 
       
   } 
}
