
<?php

use Illuminate\Database\Seeder;
use App\MateriaPrima;

class Meteria_primasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       MateriaPrima::create([
            'nombre' => 'Harina',
            'medida_id' => 1
             
       ]);

       MateriaPrima::create([
        'nombre' => 'Harina Integral',
        'medida_id' => 1
        ]);

        MateriaPrima::create([
            'nombre' => 'Sal',
            'medida_id' => 2
        ]);
       MateriaPrima::create([
        'nombre' => 'Azucar',
        'medida_id' => 2
        ]);
        MateriaPrima::create([
            'nombre' => 'Manteca',
            'medida_id' => 1
        ]);
       MateriaPrima::create([
        'nombre' => 'Mantequilla',
        'medida_id' => 1
        ]);
       MateriaPrima::create([
        'nombre' => 'Agua',
        'medida_id' => 3
        ]);
        MateriaPrima::create([
            'nombre' => 'Aceite',
            'medida_id' => 4
            ]);
        MateriaPrima::create([
            'nombre' => 'Huevo',
            'medida_id' => 5
       ]);    
    }
}
