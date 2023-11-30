<?php

namespace App\Models;
use App\Models\Poste;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'contenu',
    ];
    
    public function tags()
    { 
      return $this->belongsToMany(Tag::class, 'poste_tag'); 
    }
}
