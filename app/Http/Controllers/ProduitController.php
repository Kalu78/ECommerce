<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Produit;

class ProduitController extends Controller
{
    public function index(){
            $produits = Produit::paginate(12);
        
            return view('/product/allproducts',[
                'produits' => $produits
            ]);
    }

    public function show(int $id){
        $produit = Produit::all()->where('id', $id)->first();
        return view('/product/produit', ['id'=>$produit->id, 'name'=>$produit->name, 'description'=>$produit->description, 'platform'=>$produit->platform, 'price'=>$produit->price, 'image'=>$produit->image]);
    }

    public function search(){
        $q = request()->input('q');

        $produits = Produit::where('name', 'like', "%$q%")->get();

        return view('/product/search')->with('produits', $produits);

    }


    // public function order(){

    //     $user = auth()->user();

    //     Mail::to($user->email)->send(new Order($user));
    // }
}
