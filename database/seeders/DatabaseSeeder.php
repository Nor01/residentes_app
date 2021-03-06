<?php

namespace Database\Seeders;

use App\Models\VisitaFrecuente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(RoleSeeder::class);
        $this->call(TipoUsuarioSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ComunicadoSeeder::class);
        $this->call(IncidenteSeeder::class);
        $this->call(EncuestaSeeder::class);
        $this->call(ReservacionSeeder::class);
        $this->call(TipoVisitaSeeder::class);
        $this->call(VisitaFrecuenteSeeder::class);
    }
}
