<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategoriaProdutoSeeder extends Seeder
{
    public function run(): void
    {
        $fake = Faker::create("pt_BR");
        foreach(\range(1,5) as $index){
            DB::table('categoria_produto')->insert(
                ['nome'=>$fake->name,
                 'tipo'=>$fake->name,
                 'produto_nome'=>$fake->name,
                 
                ]
            );
        }
    }
}
