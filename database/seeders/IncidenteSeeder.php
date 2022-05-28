<?php

namespace Database\Seeders;

use App\Models\Incidente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IncidenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Incidente::create([
            'titulo'=>'Basura en parque',
            'fecha'=>'01/05/2022',
            'lugar'=>'Parquecito',
            'descripcion'=>'Habia mucha basura en el parquecito despues del cumple de Pepito'
        ]);
    }
}
