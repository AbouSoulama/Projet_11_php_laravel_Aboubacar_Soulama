<?php

namespace App\Http\Controllers;

use App\Models\Poste;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    //
    public function liste_tag() 
    {
        $tags = Tag::all();
        return view('tag.liste',compact('tags'));
    }
}
