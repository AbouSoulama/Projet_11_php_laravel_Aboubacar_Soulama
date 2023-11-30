<?php

namespace App\Models;
use App\Models\Utilisateur;
use App\Models\Tuteur;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ville extends Model
{
    use HasFactory;
    
    public function villes()
    {
        
        return $this->hasMany(Ville::class); 
        
    } 
}
