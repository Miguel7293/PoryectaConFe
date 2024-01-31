<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash; // Asegúrate de importar la clase Hash

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            "name"=> "MiguelGoty",
            "email"=> "admin@speaksmarter.net",
            "password"=> Hash::make("admin")
        ]);
        $admin->assignRole("admin");
        
        $editor = User::create([
            "name"=> "MiguelNoGoty",
            "email"=> "editor@speaksmarter.net",
            "password"=> Hash::make("editor")
        ]);
        $editor->assignRole("editor");

    }
}
