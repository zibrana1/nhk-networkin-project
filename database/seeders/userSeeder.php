<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user1 = User::create([
            'name' => 'honore',
            'email' => 'honore@gmail.com',
            'status'=>'directeur',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now()

        ]);
            $user1->assignRole('admin');

        $user2 = User::create([
            'name'=>'ibrahim',
            'email'=>'ibrahim@gmail.com',
            'status'=>'gerant',
            'email_verified_at'=>now(),
            'password'=>Hash::make('password'),
            'created_at'=>now(),
            'updated_at'=>now()
        ]);

            $user2->assignRole('employe');

    }
}
