<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            "name" => "wiliam Ramirez",
            "email" => "wiliam@gmail.com",
            "password" => Hash::make("12345678"),
            "url" => "https://www.youtube.com/",
        ]);

        $user2 = User::create([
            "name" => "Alison Florez",
            "email" => "alison@gmail.com",
            "password" => Hash::make("12345678"),
            "url" => "https://www.youtube.com/",
        ]);

    }
}
