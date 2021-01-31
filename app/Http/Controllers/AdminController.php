<?php

namespace App\Http\Controllers;

use App\Models\Produit as Produit;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Response;

class AdminController extends Controller
{
    public function dashboard(){

        if(auth()->guest()){
            flash("You must be connected")->error();

            return redirect('/connexion/login');
        }

        return view('/admin/dashboard');
    }


    //Utilisateurs
    public function allUser(){
        $utilisateurs = Utilisateur::all();
    
        return view('/admin/allUser',[
            'utilisateurs' => $utilisateurs
        ]);
    }

    public function deleteUser(Request $request,$id)
    {
        $utilisateur = Utilisateur::findOrFail($id);
        $utilisateur->delete();

        flash("User deleted")->warning();
        return back();
    }

    //Produits
    public function allProduct(){
        $produits = Produit::all();
    
        return view('/admin/allProduct',[
            'produits' => $produits
        ]);
    }

    //Delete
    public function deleteProduct(Request $request, $id){
        $produits = Produit::all();
    
        $produit = Produit::findOrFail($id);
        $produit->delete();
        
        flash("Product deleted")->warning();
        return back();
    }

    //Edit
    public function show(Request $request, $id){

        $produit = Produit::all()->where('id', $id)->first();
        return view('/admin/editProduct', ['id'=>$produit->id, 'name'=>$produit->name, 'description'=>$produit->description, 'platform'=>$produit->platform, 'type'=>$produit->type, 'price'=>$produit->price, 'image'=>$produit->image]);
    }

    public function updateProduct(Request $req){

        request()->validate([
            'name' => ['required'],
            'description' => ['required'],
            'platform' => ['required'],
            'type' => ['required'],
            'price' => ['required'],
            'image' => ['required'],
        ]);
        
        $produit=Produit::find($req->id);
        $produit->name=$req->name;
        $produit->description=$req->description;
        $produit->platform=$req->platform;
        $produit->type=$req->type;
        $produit->price=$req->price;
        $produit->image=$req->image;
        $produit->save();

        flash("Product updated")->success();

        return redirect()->back();
        }
    

    //Add product
    public function addProduct(){
        return view('/admin/addProduct');
    }

    public function createProduct()
    {
        request()->validate([
            'name' => ['required'],
            'description' => ['required'],
            'platform' => ['required'],
            'type' => ['required'],
            'price' => ['required'],
            'image' => ['required'],
        ]);

        $produit = Produit::create ([
            'name' => request('name'),
            'description' => request('description'),
            'platform' => request('platform'),
            'type' => request('type'),
            'price' => request('price'),
            'image' => request('image'),
        ]);

        flash("Game added")->success();
        return redirect('/admin/allProduct');
    }
}
