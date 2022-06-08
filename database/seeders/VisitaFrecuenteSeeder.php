<?php

namespace Database\Seeders;

use App\Models\VisitaFrecuente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisitaFrecuenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        VisitaFrecuente::create([
            'nombre'=>"Pepito Gutierrez",
            'notas'=>"viene a comer",
            'tipo_visita_id'=>1
        ]);
        
    }
}
