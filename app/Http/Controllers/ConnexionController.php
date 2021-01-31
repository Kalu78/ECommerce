<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur as Utilisateur;

class ConnexionController extends Controller
{
    public function formulaire(){
        if(auth()->user()){
            flash("You are already connected")->error();

            return redirect('/account');
        }

        return view('connexion/login');
    }

    public function traitement(){
        request()->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        $resultat = auth()->attempt([
            'username' => request('username'),
            'password' => request('password'),
        ]);

        if($resultat) {
            flash("You are connected")->success();

            return redirect('/account');
        }
        
        return back()->withErrors([
            'username' => 'This does not match any account',
        ]);
    }
}
