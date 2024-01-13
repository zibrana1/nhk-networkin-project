<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Categorie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Categorie::create(['nomCategorie' => 'ordinateur']);
        Categorie::create(['nomCategorie' => 'clavier']);
        Categorie::create(['nomCategorie' => 'souris']);
        Categorie::create(['nomCategorie' => 'unite_centrale']);
        Categorie::create(['nomCategorie' => 'cable']);

        $this->call(RoleAndPermission::class);
        $this->call(userSeeder::class);
        
    }
}
