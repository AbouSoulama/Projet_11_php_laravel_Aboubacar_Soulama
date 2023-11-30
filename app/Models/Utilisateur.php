<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Tuteur;
use App\Models\Ville;
use App\Models\Nationalite;
use App\Models\Groupe_sanguin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'path',
    ];

    public function image()
    {
        return $this->hasOne(Image::class);
    }
    
    public function tuteur()
    {
        return $this->belongsTo(Tuteur::class);
        
    }
    public function ville()
    {
        return $this->belongsTo(Ville::class);
        
    }
    public function nationalite()
    {
        return $this->belongsTo(Nationalite::class);
        
    }
    public function groupe_sanguin()
    {
        return $this->belongsTo(Groupe_sanguin::class);
        
    }
}
