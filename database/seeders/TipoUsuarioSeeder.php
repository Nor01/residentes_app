<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\TipoUsuario;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoUsuario::create([
            'nombre'=>'Admin',
        ]);

        TipoUsuario::create([
            'nombre'=>'Residente',
        ]);

        TipoUsuario::create([
            'nombre'=>'Seguridad',
        ]);
    }
}
