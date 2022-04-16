<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'sku' => '1000',
            'nombre' => 'Producto1',
            'id_catego' => '1',
            'descripcion' => 'Esto es una prueba',
            'precio' => '10.0',
            'cantidad' => '10',
            'estado' => 'En stock',
        ]);
        DB::table('productos')->insert([
            'sku' => '1001',
            'nombre' => 'Producto2',
            'id_catego' => '1',
            'descripcion' => 'Esto es una prueba',
            'precio' => '10.0',
            'cantidad' => '10',
            'estado' => 'En stock',
        ]);
        DB::table('productos')->insert([
            'sku' => '1002',
            'nombre' => 'Producto3',
            'id_catego' => '1',
            'descripcion' => 'Esto es una prueba',
            'precio' => '10.0',
            'cantidad' => '10',
            'estado' => 'En stock',
        ]);
        DB::table('productos')->insert([
            'sku' => '1003',
            'nombre' => 'Producto3',
            'id_catego' => '1',
            'descripcion' => 'Esto es una prueba',
            'precio' => '10.0',
            'cantidad' => '10',
            'estado' => 'En stock',
        ]);
        DB::table('productos')->insert([
            'sku' => '1004',
            'nombre' => 'Producto4',
            'id_catego' => '1',
            'descripcion' => 'Esto es una prueba',
            'precio' => '10.0',
            'cantidad' => '10',
            'estado' => 'En stock',
        ]);
        DB::table('productos')->insert([
            'sku' => '1005',
            'nombre' => 'Producto5',
            'id_catego' => '1',
            'descripcion' => 'Esto es una prueba',
            'precio' => '10.0',
            'cantidad' => '10',
            'estado' => 'En stock',
        ]);
        DB::table('productos')->insert([
            'sku' => '1006',
            'nombre' => 'Producto6',
            'id_catego' => '1',
            'descripcion' => 'Esto es una prueba',
            'precio' => '10.0',
            'cantidad' => '10',
            'estado' => 'En stock',
        ]);
        DB::table('productos')->insert([
            'sku' => '1007',
            'nombre' => 'Producto7',
            'id_catego' => '1',
            'descripcion' => 'Esto es una prueba',
            'precio' => '10.0',
            'cantidad' => '10',
            'estado' => 'En stock',
        ]);
        DB::table('productos')->insert([
            'sku' => '1008',
            'nombre' => 'Producto8',
            'id_catego' => '1',
            'descripcion' => 'Esto es una prueba',
            'precio' => '10.0',
            'cantidad' => '10',
            'estado' => 'En stock',
        ]);
        DB::table('productos')->insert([
            'sku' => '1009',
            'nombre' => 'Producto9',
            'id_catego' => '1',
            'descripcion' => 'Esto es una prueba',
            'precio' => '10.0',
            'cantidad' => '10',
            'estado' => 'En stock',
        ]);
        DB::table('productos')->insert([
            'sku' => '1010',
            'nombre' => 'Producto10',
            'id_catego' => '1',
            'descripcion' => 'Esto es una prueba',
            'precio' => '10.0',
            'cantidad' => '10',
            'estado' => 'En stock',
        ]);
    }
}
