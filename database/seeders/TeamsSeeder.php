<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function teamsArray()
    {
        return [
            ["name" => 'Brasil', "brasao_id" => 1, "created_at" => '2022-12-06 10:54:59', 'updated_at' => '2022-12-06 10:54:59', 'group_id' => 7],
            ["name" => 'Alemanha', "brasao_id" => 2, "created_at" => '2022-12-06 10:55:42', 'updated_at' => '2022-12-06 10:55:42', 'group_id' => 5],
            ["name" => 'Arábia Saudita', "brasao_id" => 3, "created_at" => '2022-12-06 10:56:40', 'updated_at' => '2022-12-06 10:56:40', 'group_id' => 3],
            ["name" => 'Argentina', "brasao_id" => 4, "created_at" => '2022-12-06 10:56:57', 'updated_at' => '2022-12-06 10:56:57', 'group_id' => 3],
            ["name" => 'Austrália', "brasao_id" => 5, "created_at" => '2022-12-06 10:57:25', 'updated_at' => '2022-12-06 10:57:25', 'group_id' => 4],
            ["name" => 'Bélgica', "brasao_id" => 6, "created_at" => '2022-12-06 10:58:09', 'updated_at' => '2022-12-06 10:58:09', 'group_id' => 6],
            ["name" => 'Camarões', "brasao_id" => 7, "created_at" => '2022-12-06 10:58:33', 'updated_at' => '2022-12-06 10:58:33', 'group_id' => 7],
            ["name" => 'Canadá', "brasao_id" => 8, "created_at" => '2022-12-06 10:58:58', 'updated_at' => '2022-12-06 10:58:58', 'group_id' => 6],
            ["name" => 'Catar', "brasao_id" => 9, "created_at" => '2022-12-06 10:59:14', 'updated_at' => '2022-12-06 10:59:14', 'group_id' => 1],
            ["name" => 'Coreia do Sul', "brasao_id" => 10, "created_at" => '2022-12-06 10:59:54', 'updated_at' => '2022-12-06 10:59:54', 'group_id' => 8],
            ["name" => 'Costa Rica', "brasao_id" => 11, "created_at" => '2022-12-06 11:00:16', 'updated_at' => '2022-12-06 11:00:16', 'group_id' => 5],
            ["name" => 'Croácia', "brasao_id" => 12, "created_at" => '2022-12-06 11:00:42', 'updated_at' => '2022-12-06 11:00:42', 'group_id' => 6],
            ["name" => 'Dinamarca', "brasao_id" => 13, "created_at" => '2022-12-06 11:01:10', 'updated_at' => '2022-12-06 11:01:10', 'group_id' => 4],
            ["name" => 'Equador', "brasao_id" => 14, "created_at" => '2022-12-06 11:01:28', 'updated_at' => '2022-12-06 11:01:28', 'group_id' => 1],
            ["name" => 'Espanha', "brasao_id" => 15, "created_at" => '2022-12-06 11:01:58', 'updated_at' => '2022-12-06 11:01:58', 'group_id' => 5],
            ["name" => 'Estados Unidos', "brasao_id" => 16, "created_at" => '2022-12-06 11:02:25', 'updated_at' => '2022-12-06 11:02:25', 'group_id' => 2],
            ["name" => 'França', "brasao_id" => 17, "created_at" => '2022-12-06 11:02:43', 'updated_at' => '2022-12-06 11:02:43', 'group_id' => 4],
            ["name" => 'Gana', "brasao_id" => 18, "created_at" => '2022-12-06 11:03:06', 'updated_at' => '2022-12-06 11:03:06', 'group_id' => 8],
            ["name" => 'Holanda', "brasao_id" => 19, "created_at" => '2022-12-06 11:03:25', 'updated_at' => '2022-12-06 11:03:25', 'group_id' => 1],
            ["name" => 'Inglaterra', "brasao_id" => 20, "created_at" => '2022-12-06 11:03:37', 'updated_at' => '2022-12-06 11:03:37', 'group_id' => 2],
            ["name" => 'Irã', "brasao_id" => 21, "created_at" => '2022-12-06 11:03:57', 'updated_at' => '2022-12-06 11:03:57', 'group_id' => 2],
            ["name" => 'Japão', "brasao_id" => 22, "created_at" => '2022-12-06 11:04:26', 'updated_at' => '2022-12-06 11:04:26', 'group_id' => 5],
            ["name" => 'Marrocos', "brasao_id" => 23, "created_at" => '2022-12-06 11:04:40', 'updated_at' => '2022-12-06 11:04:40', 'group_id' => 6],
            ["name" => 'México', "brasao_id" => 24, "created_at" => '2022-12-06 11:05:05', 'updated_at' => '2022-12-06 11:05:05', 'group_id' => 3],
            ["name" => 'País de Gales', "brasao_id" => 25, "created_at" => '2022-12-06 11:05:31', 'updated_at' => '2022-12-06 11:05:31', 'group_id' => 2],
            ["name" => 'Polônia', "brasao_id" =>  26, "created_at" => '2022-12-06 11:05:54', 'updated_at' => '2022-12-06 11:05:54', 'group_id' => 3],
            ["name" => 'Portugal', "brasao_id" => 27, "created_at" => '2022-12-06 11:06:06', 'updated_at' => '2022-12-06 11:06:06', 'group_id' => 8],
            ["name" => 'Senegal', "brasao_id" => 28, "created_at" => '2022-12-06 11:06:20', 'updated_at' => '2022-12-06 11:06:20', 'group_id' => 1],
            ["name" => 'Sérvia', "brasao_id" => 29, "created_at" => '2022-12-06 11:06:47', 'updated_at' => '2022-12-06 11:06:47', 'group_id' => 7],
            ["name" => 'Suíça', "brasao_id" => 30, "created_at" => '2022-12-06 11:07:10', 'updated_at' => '2022-12-06 11:07:10', 'group_id' => 7],
            ["name" => 'Tunísia', "brasao_id" => 31, "created_at" => '2022-12-06 11:07:40', 'updated_at' => '2022-12-06 11:07:40', 'group_id' => 4],
            ["name" => 'Uruguai', "brasao_id" => 32, "created_at" => '2022-12-06 11:08:26', 'updated_at' => '2022-12-06 11:08:26', 'group_id' => 8]
        ];
    }

    public function run()
    {
        $teams = $this->teamsArray();
        for($i = 0; $i < count($teams); $i++){
            Team::create([
                "name" => $teams[$i]["name"],
                "brasao_id" => $teams[$i]["brasao_id"],
                "created_at" => $teams[$i]["created_at"],
                "updated_at" => $teams[$i]["updated_at"],
                "group_id" => $teams[$i]["group_id"]
            ]);
        }
    }
}
