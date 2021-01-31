<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Utilisateur as Utilisateur;
use App\Models\Produit as Produit;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $produit = new Produit;
        $produit->name = 'LEAGUE OF LEGENDS';
        $produit->description = "MOBA";
        $produit->platform = 'PC';
        $produit->type = 'Action';
        $produit->price = '40';
        $produit->image = 'https://vignette.wikia.nocookie.net/leagueoflegends/images/4/42/Season_1_Banner.jpg/revision/latest?cb=20100616151834';
        $produit->save();
    }
}
