<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DesejoSeeder extends Seeder
{
    /*Run the database seeds.*/
    public function run(): void
    {
        $fake = Faker::create("pt-BR");
        foreach(range(1,4) as $index){
            DB::table('desejo')->insert(
                [
                    'nome'=>$fake->name,
                    'qtdItens'=>$fake->randomDigit(),
                    'desc'=>$fake->name,
                    'dataEntrada'=>$fake->date,
                ]
            );
        }
    }
}
