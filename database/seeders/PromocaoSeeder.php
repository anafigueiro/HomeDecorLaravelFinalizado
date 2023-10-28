<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PromocaoSeeder extends Seeder
{
    /*Run the database seeds*/
    public function run(): void
    {
        $fake = Faker::create("pt-BR");
        foreach(range(1,4) as $index){
            DB::table('promocao')->insert(
                [
                    'descricao'=>$fake->name,
                    'novo_valor'=>$fake->randomFloat(8,2,30),
                ]
            );
        }
    }
}
