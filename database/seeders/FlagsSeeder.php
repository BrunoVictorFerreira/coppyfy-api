<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Flag;
use Illuminate\Support\Facades\Log;

class FlagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function flagsArray()
    {
       return [
            [
                "url" => '/assets/brasoes/brasil.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => '2022-12-06 10:54:59',
            ],
            [
                "url" => '/assets/brasoes/alemanha.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/arabia.webp',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/argentina.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/australia.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/belgica.webp',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/camaroes.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/canada.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/catar.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/coreia.webp',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/costa.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/croacia.webp',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/dinamarca.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/equador.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/espanha.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/estados.webp',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/franca.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/gana.webp',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/holanda.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/inglaterra.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/ira.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/japao.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/marrocos.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/mexico.webp',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/gales.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/polonia.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/portugal.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/senegal.jpg',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/servia.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/suica.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/tunisia.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => '/assets/brasoes/uruguai.webp',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ]
        ];
    }

    public function run()
    {
        $flags = $this->flagsArray();
        for($i = 0; $i < count($flags); $i++){
            Log::info("flags[$i]". json_encode($flags[$i]));
            Flag::create([
                "url" => $flags[$i]["url"],
                "created_at" => $flags[$i]["created_at"],
                "updated_at" => $flags[$i]["updated_at"]
            ]);
        }
    }
}
