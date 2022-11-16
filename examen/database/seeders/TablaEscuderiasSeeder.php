<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TablaEscuderiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Escuderias')->insert([
            'nombre' => 'Escuderia',
            'fecha_creacion' => '2022-11-16',
            'num_pilotos' => 2,
            'sobre_presupuesto' => 1,
        ]);
        DB::table('Escuderias')->insert([
            'nombre' => 'Escuderia1',
            'fecha_creacion' => '2022-11-16',
            'num_pilotos' => 1,
            'sobre_presupuesto' => 1,
        ]);
    }
}
