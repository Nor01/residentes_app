<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Encuesta;

class EncuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Encuesta::create([
            'titulo'=>'Nuevas politicas',
            'fecha'=>'01/05/2022',
            'descripcion'=>'Nuevas politicas de uso de parquecito.',
            'link'=>'https://encuesta.com/riosjSkd;'
        ]);

        Encuesta::create([
            'titulo'=>'Contrataciones',
            'fecha'=>'01/05/2022',
            'descripcion'=>'Encuesta sobre contrataciones.',
            'link'=>'https://encuesta.com/ro5435sjIOPkd;'
        ]);

        Encuesta::create([
            'titulo'=>'Encuesta 3',
            'fecha'=>'01/05/2022',
            'descripcion'=>'Encuesta 3',
            'link'=>'https://encuesta.com/riosjSkd;'
        ]);


    }
}
