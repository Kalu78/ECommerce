<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur as Utilisateur;
use Illuminate\Support\Facades\mail;


class InscriptionController extends Controller
{
    public function formulaire()
    {
        return view('connexion/signup');
    }

    public function traitement()
    {
        request()->validate([
            'email' => ['required', 'email', 'unique:Utilisateurs'],
            'username' => ['required', 'unique:Utilisateurs'],
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required'],
        ]);

        $utilisateur = Utilisateur::create ([
            'email' => request('email'),
            'username' => request('username'),
            'password' => bcrypt(request('password')),
        ]);


        Mail::send('emails.inscriptionmail', ['username' => $utilisateur->name],function($message) use($utilisateur){
            $message->to($utilisateur->email)->from('djeversop@gmail.com')->subject('Inscription');
        });

        return view('connexion/login');
    }
}