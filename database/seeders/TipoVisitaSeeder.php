<?php

namespace Database\Seeders;

use App\Models\TipoVisita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoVisitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        TipoVisita::create([
            'nombre'=>'Familiar',
        ]);

        TipoVisita::create([
            'nombre'=>'Servicio a domicilio',
        ]);

        TipoVisita::create([
            'nombre'=>'Servicio tecnico',
        ]);

    }
}
