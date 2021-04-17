<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Producto;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Esteban Sevilla',
            'email' => 'esteban@esteban.com',
            'password' => Hash::make('esteban123'),
        ]);

        User::factory(10)->create();
        
        $this->productos();
    }

    public function productos(){

        // CAFETERAS
        Producto::insert([
            'imagen' => 'uploads/cafetera.jpeg',
            'nombre' => 'Cafetera Plus',
            'descripcion' => 'Nada mejor que un buen cáfe por la mañana.',
            'precio' => 1500
        ]);
        Producto::insert([
            'imagen' => 'uploads/estufa.jpeg',
            'nombre' => 'Estufa Plus',
            'descripcion' => 'Calienta tu huevito con catsup',
            'precio' => 8000
        ]);
        Producto::insert([
            'imagen' => 'uploads/micro.jpg',
            'nombre' => 'Microondas Plus',
            'descripcion' => 'Calienta tu maruchan en este grandioso microondas.',
            'precio' => 2200
        ]);
        Producto::insert([
            'imagen' => 'uploads/refri.jpg',
            'nombre' => 'Refrigerador Plus',
            'descripcion' => 'Enfria tus chelas aquí.',
            'precio' => 3200
        ]);

        Producto::insert([
            'imagen' => 'uploads/cafetera2.jpg',
            'nombre' => 'Cafetera Max',
            'descripcion' => 'Deja de gastar gas, y empieza a gastar luz.',
            'precio' => 3700
        ]);
        Producto::insert([
            'imagen' => 'uploads/estufa2.jpg',
            'nombre' => 'Estufa Max',
            'descripcion' => 'Manten en buen estado tus alimentos.',
            'precio' => 7300
        ]);
        Producto::insert([
            'imagen' => 'uploads/micro2.jpg',
            'nombre' => 'Microondas Max',
            'descripcion' => 'Deja de gastar gas, y empieza a gastar luz.',
            'precio' => 3110
        ]);
        Producto::insert([
            'imagen' => 'uploads/refri2.jpg',
            'nombre' => 'Refrigerador Max',
            'descripcion' => 'Hey foraneo!, mete tus toperes a esta belleza de refrigerador.',
            'precio' => 9123
        ]);

        Producto::insert([
            'imagen' => 'uploads/cafetera3.jpeg',
            'nombre' => 'Cafetera Pro',
            'descripcion' => 'Ponte las pilas, toma tu cáfe.',
            'precio' => 4100
        ]);

        // ESTUFAS
        Producto::insert([
            'imagen' => 'uploads/estufa3.jpg',
            'nombre' => 'Estufa Pro',
            'descripcion' => 'Cansado de tomar tus chelas todas frías..., no te preocupes más; ésta es tu solución.',
            'precio' => 4100
        ]);

        
        
        Producto::insert([
            'imagen' => 'uploads/micro3.jpeg',
            'nombre' => 'Microondas Pro',
            'descripcion' => 'Ponte las pilas, toma tu cáfe.',
            'precio' => 4100
        ]);

        
        
        Producto::insert([
            'imagen' => 'uploads/refri3.jpg',
            'nombre' => 'Refrigerador Pro',
            'descripcion' => 'Ponte las pilas, toma tu cáfe.',
            'precio' => 4100
        ]);
    }
}
