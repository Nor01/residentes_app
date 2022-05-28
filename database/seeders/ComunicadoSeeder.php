<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comunicado;

class ComunicadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Comunicado::create([
            'descripcion'=>'Corte de energia electrica por mantenimiento',
            'fecha'=>'01/05/2022'
        ]);


    }
}
