<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tiendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tienda')->insert([
            'idTienda' => 1,
            'CostoDelivery' => 5,
            'estado' => "ABIERTO",
            'acepta_pedidos' => 'TRUE',
            'direccion_tienda' => "Julio Cesar Tello 886 - Lince",
            'cupon' => 'ELEGIPCIO',
            'descuento' => 20,
            'cantidadTotal' => 0,
            'cupon_dos' => 'AMOELEGIPCIO',

        ]);

        /* DB::table('tienda')->insert([
            'idTienda' => 2,
            'CostoDelivery' => 0,
            'estado' => "CERRADO",
            'acepta_pedidos' => 'TRUE',
            'direccion_tienda' => "Av. El Polo 121 - Surco",
            'cupon' => 'ELEGIPCIO',
            'descuento' => 20,
            'cantidadTotal' => 0,
            'cupon_dos' => 'AMOELEGIPCIO',

        ]); */
    }
}
