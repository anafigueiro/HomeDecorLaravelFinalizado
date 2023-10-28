<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ContatoSeeder extends Seeder
{
    /*Run the database seeds.*/
    public function run(): void
    {
        $fake = Faker::create("pt_BR");
        foreach(\range(1,5) as $index){
            DB::table('contato')->insert(
                [
                    'nome' => $fake->name,
                    'sobrenome' => $fake->name,
                    'des' => $fake->sentence(3),
                    'endereco' => $fake->address(),
                    'email'=>$fake->email,
                ]
            );
        }
    }
}
