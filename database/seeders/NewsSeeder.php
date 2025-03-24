<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
     /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            [
                'title' => 'Artigo Simulação 1',
                'country_flag' => 'BRA',
            ],
            [
                'title' => 'Artigo Simulação 2',
                'country_flag' => 'BRA',
            ],
            [
                'title' => 'Artigo Simulação 3',
                'country_flag' => 'ARG',
            ]
        ]);
    }
}
