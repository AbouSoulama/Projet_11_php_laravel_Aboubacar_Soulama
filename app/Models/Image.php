<?php

namespace App\Models;

use App\Models\Utilisateur;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Image extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'path',
        
    ];
    
    public function utilisateur()
    {
      return $this->belongsTo(Utilisateur::class);  
    }
}
