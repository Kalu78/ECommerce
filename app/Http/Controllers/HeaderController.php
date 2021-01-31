<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

class HeaderController extends Controller
{
    public function index(){
        $utilisateurs = Utilisateur::all();
        
        return view('/header', [
            'utilisateurs' => $utilisateurs
        ]);
    }  
}
