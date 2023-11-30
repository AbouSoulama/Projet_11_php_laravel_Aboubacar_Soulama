<?php

namespace App\Models;

use App\Models\Poste;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
    ];
    
    public function postes()
    {
        return $this->belongsToMany(Poste::class, 'poste_tag'); 
    }
}


