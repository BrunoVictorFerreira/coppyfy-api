<?php

namespace Database\Seeders;

use App\GraphQL\Mutations\GameResults;
use App\Models\GameResult;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function gameResultArray()
    {
        return [
            ["match_id" => 2, "first_team" =>    0, "second_team" =>    2, "created_at" =>    "2022-12-12 23:01:10", "updated_at" =>    "2022-12-12 23:01:10", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 3, "first_team" =>    6, "second_team" =>    2, "created_at" =>    "2022-12-12 23:01:20", "updated_at" =>    "2022-12-12 23:01:20", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 4, "first_team" =>    1, "second_team" =>    1, "created_at" =>    "2022-12-12 23:01:29", "updated_at" =>    "2022-12-12 23:01:29", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 5, "first_team" =>    1, "second_team" =>    2, "created_at" =>    "2022-12-12 23:01:38", "updated_at" =>    "2022-12-12 23:01:38", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 6, "first_team" =>    0, "second_team" =>    0, "created_at" =>    "2022-12-12 23:01:51", "updated_at" =>    "2022-12-12 23:01:51", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 7, "first_team" =>    0, "second_team" =>    0, "created_at" =>    "2022-12-12 23:02:00", "updated_at" =>    "2022-12-12 23:02:00", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 8, "first_team" =>    4, "second_team" =>    1, "created_at" =>    "2022-12-12 23:02:13", "updated_at" =>    "2022-12-12 23:02:13", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 9, "first_team" =>    0, "second_team" =>    0, "created_at" =>    "2022-12-12 23:02:28", "updated_at" =>    "2022-12-12 23:02:28", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 10, "first_team" =>    1, "second_team" =>    2, "created_at" =>    "2022-12-12 23:02:40", "updated_at" =>    "2022-12-12 23:02:40", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 11, "first_team" =>    7, "second_team" =>    0, "created_at" =>    "2022-12-12 23:02:48", "updated_at" =>    "2022-12-12 23:02:48", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 12, "first_team" =>    1, "second_team" =>    0, "created_at" =>    "2022-12-12 23:02:55", "updated_at" =>    "2022-12-12 23:02:55", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 13, "first_team" =>    1, "second_team" =>    0, "created_at" =>    "2022-12-12 23:03:01", "updated_at" =>    "2022-12-12 23:03:01", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 14, "first_team" =>    0, "second_team" =>    0, "created_at" =>    "2022-12-12 23:03:09", "updated_at" =>    "2022-12-12 23:03:09", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 15, "first_team" =>    3, "second_team" =>    2, "created_at" =>    "2022-12-12 23:03:17", "updated_at" =>    "2022-12-12 23:03:17", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 16, "first_team" =>    2, "second_team" =>    0, "created_at" =>    "2022-12-12 23:03:26", "updated_at" =>    "2022-12-12 23:03:26", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 17, "first_team" =>    0, "second_team" =>    2, "created_at" =>    "2022-12-12 23:05:12", "updated_at" =>    "2022-12-12 23:05:12", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 18, "first_team" =>    1, "second_team" =>    3, "created_at" =>    "2022-12-12 23:05:25", "updated_at" =>    "2022-12-12 23:05:25", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 19, "first_team" =>    1, "second_team" =>    1, "created_at" =>    "2022-12-12 23:05:46", "updated_at" =>    "2022-12-12 23:05:46", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 20, "first_team" =>    0, "second_team" =>    0, "created_at" =>    "2022-12-12 23:06:02", "updated_at" =>    "2022-12-12 23:06:02", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 21, "first_team" =>    0, "second_team" =>    1, "created_at" =>    "2022-12-12 23:06:19", "updated_at" =>    "2022-12-12 23:06:19", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 22, "first_team" =>    2, "second_team" =>    0, "created_at" =>    "2022-12-12 23:06:33", "updated_at" =>    "2022-12-12 23:06:33", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 23, "first_team" =>    2, "second_team" =>    1, "created_at" =>    "2022-12-12 23:06:45", "updated_at" =>    "2022-12-12 23:06:45", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 24, "first_team" =>    2, "second_team" =>    0, "created_at" =>    "2022-12-12 23:06:58", "updated_at" =>    "2022-12-12 23:06:58", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 25, "first_team" =>    0, "second_team" =>    1, "created_at" =>    "2022-12-12 23:07:11", "updated_at" =>    "2022-12-12 23:07:11", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 26, "first_team" =>    0, "second_team" =>    2, "created_at" =>    "2022-12-12 23:07:21", "updated_at" =>    "2022-12-12 23:07:21", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 27, "first_team" =>    4, "second_team" =>    1, "created_at" =>    "2022-12-12 23:07:30", "updated_at" =>    "2022-12-12 23:07:30", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 28, "first_team" =>    1, "second_team" =>    1, "created_at" =>    "2022-12-12 23:07:38", "updated_at" =>    "2022-12-12 23:07:38", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 29, "first_team" =>    3, "second_team" =>    3, "created_at" =>    "2022-12-12 23:07:52", "updated_at" =>    "2022-12-12 23:07:52", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 30, "first_team" =>    2, "second_team" =>    3, "created_at" =>    "2022-12-12 23:07:59", "updated_at" =>    "2022-12-12 23:07:59", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 31, "first_team" =>    1, "second_team" =>    0, "created_at" =>    "2022-12-12 23:08:09", "updated_at" =>    "2022-12-12 23:08:09", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 32, "first_team" =>    2, "second_team" =>    0, "created_at" =>    "2022-12-12 23:08:19", "updated_at" =>    "2022-12-12 23:08:19", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 34, "first_team" =>    1, "second_team" =>    2, "created_at" =>    "2022-12-12 23:08:37", "updated_at" =>    "2022-12-12 23:08:37", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 33, "first_team" =>    2, "second_team" =>    0, "created_at" =>    "2022-12-12 23:08:52", "updated_at" =>    "2022-12-12 23:08:52", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 36, "first_team" =>    0, "second_team" =>    1, "created_at" =>    "2022-12-12 23:09:02", "updated_at" =>    "2022-12-12 23:09:02", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 35, "first_team" =>    0, "second_team" =>    3, "created_at" =>    "2022-12-12 23:09:14", "updated_at" =>    "2022-12-12 23:09:14", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 37, "first_team" =>    1, "second_team" =>    0, "created_at" =>    "2022-12-12 23:09:29", "updated_at" =>    "2022-12-12 23:09:29", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 38, "first_team" =>    1, "second_team" =>    0, "created_at" =>    "2022-12-12 23:09:36", "updated_at" =>    "2022-12-12 23:09:36", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 40, "first_team" =>    0, "second_team" =>    2, "created_at" =>    "2022-12-12 23:09:44", "updated_at" =>    "2022-12-12 23:09:44", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 39, "first_team" =>    1, "second_team" =>    2, "created_at" =>    "2022-12-12 23:10:04", "updated_at" =>    "2022-12-12 23:10:04", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 41, "first_team" =>    0, "second_team" =>    0, "created_at" =>    "2022-12-12 23:10:15", "updated_at" =>    "2022-12-12 23:10:15", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 42, "first_team" =>    1, "second_team" =>    2, "created_at" =>    "2022-12-12 23:10:25", "updated_at" =>    "2022-12-12 23:10:25", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 43, "first_team" =>    2, "second_team" =>    1, "created_at" =>    "2022-12-12 23:10:35", "updated_at" =>    "2022-12-12 23:10:35", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 44, "first_team" =>    2, "second_team" =>    4, "created_at" =>    "2022-12-12 23:10:48", "updated_at" =>    "2022-12-12 23:10:48", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 45, "first_team" =>    2, "second_team" =>    1, "created_at" =>    "2022-12-12 23:11:01", "updated_at" =>    "2022-12-12 23:11:01", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 46, "first_team" =>    0, "second_team" =>    2, "created_at" =>    "2022-12-12 23:11:12", "updated_at" =>    "2022-12-12 23:11:12", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 48, "first_team" =>    2, "second_team" =>    3, "created_at" =>    "2022-12-12 23:11:23", "updated_at" =>    "2022-12-12 23:11:23", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 47, "first_team" =>    1, "second_team" =>    0, "created_at" =>    "2022-12-12 23:11:34", "updated_at" =>    "2022-12-12 23:11:34", "deleted_at" => 'null', 'finalizado' => true],
            ["match_id" => 1, "first_team" =>    0, "second_team" =>    2, "created_at" =>    "2022-12-12 23:15:28", "updated_at" =>    "2022-12-12 23:15:28", "deleted_at" => 'null', 'finalizado' => true],
        ];
    }
    public function run()
    {
        $gameResult = $this->gameResultArray();
        
        for($i = 0; $i < count($gameResult); $i++){
            $gameResults = new GameResults();
            $gameResults->saveOut([
                "match_id" => $gameResult[$i]["match_id"],
                "first_team" => $gameResult[$i]["first_team"],
                "second_team" => $gameResult[$i]["second_team"],
                "created_at" => $gameResult[$i]["created_at"],
                "updated_at" => $gameResult[$i]["updated_at"],
                "deleted_at" => $gameResult[$i]["deleted_at"]
            ]);
            // GameResult::create([
            //     "match_id" => $gameResult[$i]["match_id"],
            //     "first_team" => $gameResult[$i]["first_team"],
            //     "second_team" => $gameResult[$i]["second_team"],
            //     "created_at" => $gameResult[$i]["created_at"],
            //     "updated_at" => $gameResult[$i]["updated_at"],
            //     "deleted_at" => $gameResult[$i]["deleted_at"]
            // ]);
        }
    }
}
