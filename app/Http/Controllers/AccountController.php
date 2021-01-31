<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{

    public function dashboard(){

        if(auth()->guest()){
            flash("You must be connected")->error();

            return redirect('/connexion/login');
        }

        return view('account');
    }

    public function deconnexion(){
        auth()->logout();

        return redirect('/');
    }

    public function editInfo(){
        return view ('editInfo');
    }

    public function traitement(){
        request()->validate([
            'email' => ['nullable', 'unique:Utilisateurs'],
        ]);

        $resultat = auth()->user()->update([
            'email' => request('email'),
        ]);
        if($resultat) {
            flash("Information changer")->success();

            return redirect('/account');
        }
    }

    public function traitement2(){
        request()->validate([
            'username' => ['nullable', 'unique:Utilisateurs'],
        ]);

        $resultat = auth()->user()->update([
            'username' => request('username'),
        ]);

        if($resultat) {
            flash("Information changer")->success();

            return redirect('/account');
        }
    }

    public function traitement3(){
        request()->validate([
            'password' => ['confirmed', 'min:8', 'nullable'],
            'password_confirmation' => ['nullable'],
        ]);

        $resultat = auth()->user()->update([
            'password' => bcrypt(request('password')),
        ]);

        if($resultat) {
            flash("Information changer")->success();
        
            return redirect('/account');
        }
    }
}
