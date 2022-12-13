<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function groupsArray(){
        return [
        ["name" => 'Grupo A', "created_at" => '2022-11-20 10:00:00', "updated_at" => '2022-11-20 10:00:00'],
        ["name" => 'Grupo B', "created_at" => '2022-11-20 10:00:00', "updated_at" => '2022-11-20 10:00:00'],
        ["name" => 'Grupo C', "created_at" => '2022-11-20 10:00:00', "updated_at" => '2022-11-20 10:00:00'],
        ["name" => 'Grupo D', "created_at" => '2022-11-20 10:00:00', "updated_at" => '2022-11-20 10:00:00'],
        ["name" => 'Grupo E', "created_at" => '2022-11-20 10:00:00', "updated_at" => '2022-11-20 10:00:00'],
        ["name" => 'Grupo F', "created_at" => '2022-11-20 10:00:00', "updated_at" => '2022-11-20 10:00:00'],
        ["name" => 'Grupo G', "created_at" => '2022-11-20 10:00:00', "updated_at" => '2022-11-20 10:00:00'],
        ["name" => 'Grupo H', "created_at" => '2022-11-20 10:00:00', "updated_at" => '2022-11-20 10:00:00']
        ];
    }
    
     public function run()
    {
        $groups = $this->groupsArray();
        for($i = 0; $i < count($groups); $i++){
            Group::create([
                "name" => $groups[$i]["name"],
                "created_at" => $groups[$i]["created_at"],
                "updated_at" => $groups[$i]["updated_at"]
            ]);
        }
    }
}
