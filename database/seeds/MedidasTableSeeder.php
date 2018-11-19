<?php

use Illuminate\Database\Seeder;
use App\Medida;

class MedidasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medida::create([
            'abreviatura' => 'kg',
            'nombre' => 'Kilogramo'
        ]);
        Medida::create([
            'abreviatura' => 'gr',
            'nombre' => 'Gramo'
        ]);
        Medida::create([
            'abreviatura' => 'lt',
            'nombre' => 'Litro'
        ]);
        Medida::create([
            'abreviatura' => 'ml',
            'nombre' => 'Mililitro'
        ]);
        Medida::create([
            'abreviatura' => 'u',
            'nombre' => 'Unidades'
        ]);
        Medida::create([
            'abreviatura' => 'qq',
            'nombre' => 'Quintal'
        ]);
    }
}
