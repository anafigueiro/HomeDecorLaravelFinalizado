<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProdutoSeeder extends Seeder
{
    /*Run the database seeds*/
    public function run(): void
    {
        $fake = Faker::create("pt-BR");
        foreach(range(1,4) as $index){
            DB::table('produto')->insert(
                [
                    'nome'=>$fake->name,
                    'descricao'=>$fake->name,
                    'valor'=>$fake->randomFloat(8,2,30),
                ]
            );
        }
    }
}
