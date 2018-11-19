<?php

use Illuminate\Database\Seeder;
use App\Proveedor;
class ProveedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proveedor::create([
            'nombre' => 'Arcor Alimentos',
            'Direccion' => 'Calle San Jose 6625',
            'telefono' => 3589410
        ]);
        Proveedor::create([
            'nombre' => 'Distribuidor Francesa',
            'Direccion' => 'Calle Lucas 8725',
            'telefono' => 3485012
        ]);
        Proveedor::create([
            'nombre' => 'Beicruz S.A.',
            'Direccion' => 'Calle Mercado 4821',
            'telefono' => 3492180
        ]);        
    }
}
