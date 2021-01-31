<?php

use Illuminate\Support\Facades\Route;
use App\Models\Utilisateur as Utilisateur;
use App\Models\Produit as Produit;
use App\Http\Controllers\InscriptionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/header', 'App\Http\Controllers\HeaderController@index');

//Connexion
Route::get('/connexion/login', 'App\Http\Controllers\ConnexionController@formulaire');
Route::post('/connexion/login', 'App\Http\Controllers\ConnexionController@traitement');

//Inscription
Route::get('/connexion/signup', 'App\Http\Controllers\InscriptionController@formulaire');
Route::post('/connexion/signup', 'App\Http\Controllers\InscriptionController@traitement');

//Account et déconnexion
Route::get('/account',  'App\Http\Controllers\AccountController@dashboard');
Route::get('/deconnexion',  'App\Http\Controllers\AccountController@deconnexion');

//Edit Info
Route::get('/editInfo',  'App\Http\Controllers\AccountController@editInfo');
Route::post('/editInfo',  'App\Http\Controllers\AccountController@traitement');
Route::post('/editInfo2',  'App\Http\Controllers\AccountController@traitement2');
Route::post('/editInfo3',  'App\Http\Controllers\AccountController@traitement3');

//Cart 
Route::get('/panier/ajouter',  'App\Http\Controllers\CartController@add')->name('cart.store');

//Email
Route::post('/emails/order', 'App\Http\Controllers\ProduitController@mail')->name('emails.order');

//Produit
Route::get('/', 'App\Http\Controllers\ProduitController@index');
Route::get('product/produit/{id}', 'App\Http\Controllers\ProduitController@show')->name('showProduit');

//Recherche
Route::get('product/search', 'App\Http\Controllers\ProduitController@search')->name('product/search');

//Partie Admin
Route::get('/admin/product', 'App\Http\Controllers\AdminController@index');
Route::get('/admin/dashboard', 'App\Http\Controllers\AdminController@dashboard');

//Utilisateurs
Route::get('/admin/allUser', 'App\Http\Controllers\AdminController@allUser');
//Delete
Route::post('/admin/deleteUser/{id}', 'App\Http\Controllers\AdminController@deleteUSer')->name('deleteUser');

//Produits
Route::get('admin/allProduct', 'App\Http\Controllers\AdminController@allProduct');
Route::post('admin/deleteProduct/{id}', 'App\Http\Controllers\AdminController@deleteProduct')->name('deleteProduct');
//Edit
Route::get('admin/editProduct/{id}', 'App\Http\Controllers\AdminController@show')->name('editProduct');
Route::post('admin/editProduct', 'App\Http\Controllers\AdminController@updateProduct')->name('updateProduct');
//Ad
Route::get('admin/addProduct', 'App\Http\Controllers\AdminController@addProduct');
Route::post('admin/addProduct', 'App\Http\Controllers\AdminController@createProduct');