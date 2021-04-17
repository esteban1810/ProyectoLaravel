<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;


class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::insert([
            'imagen' => 'uploads/cafetera.jpeg',
            'nombre' => 'Cafetera Plus',
            'descripcion' => 'Nada mejor que un buen cáfe por la mañana.',
            'precio' => 1500
        ]);
        Producto::insert([
            'imagen' => 'uploads/cafetera2.jpg',
            'nombre' => 'Cafetera Max',
            'descripcion' => 'Deja de gastar gas, y empieza a gastar luz.',
            'precio' => 3700
        ]);
        Producto::insert([
            'imagen' => 'uploads/cafetera3.jpeg',
            'nombre' => 'Cafetera Pro',
            'descripcion' => 'Ponte las pilas, toma tu cáfe.',
            'precio' => 4100
        ]);
    }
}
