<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'=>'Erick Roldan',
            'tipo_usuario_id'=>'1',
            'email'=>'erick@admin.com',
            'password'=>bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name'=>'Orinson Lobo',
            'tipo_usuario_id'=>'2',
            'email'=>'orinson@admin.com',
            'password'=>bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name'=>'Francisco Garcia',
            'tipo_usuario_id'=>'3',
            'email'=>'francisco@admin.com',
            'password'=>bcrypt('12345678')
        ])->assignRole('Admin');



       
    }
}
