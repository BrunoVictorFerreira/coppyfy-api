<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Flag;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function usersArray()
    {
       return [
            [
                "name" => 'Bruno Victor Ferreira Graciano',
                "email" => 'victorbruno221@gmail.com',
                "password" => '$2a$12$Q6ZFZXaTS.H6/9ycWLo44.tTdSR2q8i/nDuvT69b2ZrMmlBO8.6Q2',
                "remember_token" => false,
                "photo" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4rsSzLimlQyniEtUV4-1raljzFhS45QBeAw&usqp=CAU',
            ]
        ];
    }

    public function run()
    {
        $usuarios = $this->usersArray();
        for($i = 0; $i < count($usuarios); $i++){
            User::create([
                "name" => $usuarios[$i]["name"],
                "email" => $usuarios[$i]["email"],
                "password" => $usuarios[$i]["password"],
                "remember_token" => $usuarios[$i]["remember_token"],
                "photo" => $usuarios[$i]["photo"]
            ]);
        }
    }
}
