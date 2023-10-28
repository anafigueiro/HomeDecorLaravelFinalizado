<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OuvidoriaSeeder extends Seeder
{
    /*Run the database seeds.*/
    public function run(): void
    {
        $fake = Faker::create("pt-BR");
        foreach(range(1,4) as $index){
            DB::table('ouvidoria')->insert(
                [
                    'dataRegistro'=>$fake->date,
                    'sugestao'=>$fake->name,
                    'observacao'=>$fake->name,
                ]
            );
        }
    }
}
