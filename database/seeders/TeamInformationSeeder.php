<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\TeamInformation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = Team::all();
        for($i = 0; $i < count($teams); $i++){
            TeamInformation::create([
                "teams_id" => $teams[$i]->id,
                "pts" => 0,
                "vit" => 0,
                "der" => 0,
                "sg" => 0,
            ]);
        }
    }
}
