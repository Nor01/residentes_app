<?php

namespace Database\Seeders;

use App\Models\Reservacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Reservacion::create([
            'username'=>'Casa A #100',
            'fecha'=>'01/05/2022',
            'lugar'=>'Piscina',
            'descripcion'=>'Necesito practicar mi estilo mariposa.'
        ]);
        Reservacion::create([
            'username'=>'Casa B #008',
            'fecha'=>'01/05/2022',
            'lugar'=>'Parquecito',
            'descripcion'=>'Tendremos un bingo para personas de tercera edad.'
        ]);
    }
}
