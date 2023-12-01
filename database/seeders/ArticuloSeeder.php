<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Iluminate\Support\srt;


class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'referencia' => '10',
                'nombre' => 'Buso Reebok',
                'descripcion' => 'Buso Reebok Original Color Negro',
                'color' => 'Negro',
                'precioUnitario' => 100000,
                'observacion' => 'Buen Estado',
                'Foto' => 'buso.jpg',
                'marca' => '1'
                

            ],

            [
                'referencia' => '20',
                'nombre' => 'Guayos Adidas',
                'descripcion' => 'Guayos Adidas Originales Color Verde y Blanco',
                'color' => 'Verde y Blanco',
                'precioUnitario' => 200000,
                'observacion' => 'Buen Estado',
                'Foto' => 'guay.jpg',
                'marca' => '2'
            ],

            [
                'referencia' => '30',
                'nombre' => 'Tenis Nike',
                'descripcion' => 'Tenis Nike Originales Color Negro',
                'color' => 'Negro',
                'precioUnitario' => 150000,
                'observacion' => 'Buen Estado',
                'Foto' => 'tenis.jpg',
                'marca' => '3'
            ],

            [
                'referencia' => '40',
                'nombre' => 'Camiseta Puma',
                'descripcion' => 'Camiseta Puma Original Color Blanca',
                'color' => 'Blanca',
                'precioUnitario' => 70000,
                'observacion' => 'Buen Estado',
                'Foto' => 'cami.jpg',
                'marca' => '4'
            ],

            [
                'referencia' => '50',
                'nombre' => 'Gorra Gucci',
                'descripcion' => 'Gorra Gucci Original Color Cafe',
                'color' => 'Cafe',
                'precioUnitario' => 80000,
                'observacion' => 'Buen Estado',
                'Foto' => 'gorra.jpg',
                'marca' => '5'
            ]
        ];
        DB::table('articulo')->insert($datos);
    }
}
