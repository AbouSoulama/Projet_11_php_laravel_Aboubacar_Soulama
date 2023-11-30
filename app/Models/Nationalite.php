<?php

namespace App\Models;
use App\Models\Utilisateur;
use App\Models\Tuteur;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nationalite extends Model
{
    use HasFactory;
    
    public function nationalites()
    {
        
        return $this->hasMany(Nationalite::class); 
        
    } 
}
