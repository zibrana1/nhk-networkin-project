<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        /*$categories = [
            ['nomCategorie' => 'ordinateur'],
            ['nomCategorie' => 'souris'],
            ['nomCategorie' => 'clavier'],
        ];*/
        Categorie::create(['nomCategorie'=>'ordinateur']);
        Categorie::create(['nomCategorie'=>'clavier']);
        Categorie::create(['nomCategorie'=>'souris']);
        Categorie::create(['nomCategorie'=>'unite_centrale']);
        Categorie::create(['nomCategorie'=>'cable']);
    }
}
