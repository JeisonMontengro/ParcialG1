<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Iluminate\Support\srt;


class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'idMarca' => '1',
                'descripcion' => 'Marca Reebok'
            ],
            [
                'idMarca' => '2',
                'descripcion' => 'Marca Adidas'
            ], 
            [
                'idMarca' => '3',
                'descripcion' => 'Marca Nike'
            ],
            [
                'idMarca' => '4',
                'descripcion' => 'Marca Puma'
            ],
            [
                'idMarca' => '5',
                'descripcion' => 'Marca Gucci'
            ]
        ];
        DB::table('marca')->insert($datos);
    }
}
