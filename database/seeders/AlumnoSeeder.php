<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    DB::table('alumno')->insert([
        [
            'nombre' => 'Juan Pérez',
            'telefono' => '3001234567',
            'edad' => 20,
            'password' => Hash::make('123456'),
            'email' => 'juan@mail.com',
            'sexo' => 'M',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'nombre' => 'Ana Gómez',
            'telefono' => null,
            'edad' => 22,
            'password' => Hash::make('abcdef'),
            'email' => 'ana@mail.com',
            'sexo' => 'F',
            'created_at' => now(),
            'updated_at' => now()
        ]
    ]);
}
}
