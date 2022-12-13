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
                "url" => 'http://localhost:8000/storage/brasil.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => '2022-12-06 10:54:59',
            ],
            [
                "url" => 'http://localhost:8000/storage/alemanha.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/arabia.webp',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/argentina.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/australia.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/belgica.webp',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/camaroes.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/canada.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/catar.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/coreia.webp',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/costa.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/croacia.webp',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/dinamarca.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/equador.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/espanha.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/estados.webp',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/franca.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/gana.webp',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/holanda.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/inglaterra.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/ira.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/japao.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/marrocos.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/mexico.webp',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/gales.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/polonia.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/portugal.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/senegal.jpg',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/servia.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/suica.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/tunisia.png',
                "created_at" => '2022-12-06 10:54:59',
                "updated_at" => "2022-12-06 10:54:59"
            ], [
                "url" => 'http://localhost:8000/storage/uruguai.webp',
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
