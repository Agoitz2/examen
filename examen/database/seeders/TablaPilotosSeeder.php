<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TablaPilotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Pilotos')->insert([
            'nombre' => 'Mary Roe',
            'fecha_nacimiento' => '2022-11-16',//current_date(),
            'numero_licencia' => 1,
            'victorias' => 1,
            'escuderia_id' => 1,
        ]);
        DB::table('Pilotos')->insert([
            'nombre' => 'Angie Lopez',
            'fecha_nacimiento' => '2022-11-16',
            'numero_licencia' => 1,
            'victorias' => 0,
            'escuderia_id' => 1,
        ]);
        DB::table('Pilotos')->insert([
            'nombre' => 'Agoitz Ezkerra',
            'fecha_nacimiento' => '2022-11-16',
            'numero_licencia' => 1,
            'victorias' => 20,
            'escuderia_id' => 2,
        ]);
        DB::table('Pilotos')->insert([
            'nombre' => 'Rigoberto Noseqmas',
            'fecha_nacimiento' => '2022-11-16',
            'numero_licencia' => 1,
            'victorias' => 2,
            'escuderia_id' => 3,
        ]);
    }
}
