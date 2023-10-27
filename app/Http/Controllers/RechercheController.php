<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RechercheController extends Controller
{
    public function formulaire()
    {
        return view('recherche');
    }
    
}
