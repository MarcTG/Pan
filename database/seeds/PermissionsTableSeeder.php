<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name'          => 'Navergar usuario',
            'slug'          => 'view.users',
            'description'   => 'Lista y navega todos los usuarios del sistema'
        ]);
        Permission::create([
            'name'          => 'Crear usuario',
            'slug'          => 'create.user',
            'description'   => 'Crea un nuevo usuario'
        ]);
        Permission::create([
            'name'          => 'Editar usuario',
            'slug'          => 'edit.user',
            'description'   => 'Edita un usuario'
        ]);
        Permission::create([
            'name'          => 'Eliminar usuario',
            'slug'          => 'delete.user',
            'description'   => 'Elimina un usuario'
        ]);
        

        //roles

        Permission::create([
            'name'          => 'Navergar roles',
            'slug'          => 'index.rol',
            'description'   => 'Lista y navega todos los roless del sistema'
        ]);
        Permission::create([
            'name'          => 'Crear roles',
            'slug'          => 'create.rol',
            'description'   => 'Crea un nuevo roles'
        ]);
        Permission::create([
            'name'          => 'Editar roles',
            'slug'          => 'edit.rol',
            'description'   => 'Edita un roles'
        ]);
        
        Permission::create([
            'name'          => 'Eliminar roles',
            'slug'          => 'delete.rol',
            'description'   => 'Elimina un roles'
        ]);
        Permission::create([
            'name'          => 'Ver detalle de roll',
            'slug'          => 'show.rol',
            'description'   => 'Ver detalle de rol'
        ]);
        
        //Medidas
        Permission::create([
            'name'          => 'Navergar Medidas',
            'slug'          => 'view.medida',
            'description'   => 'Lista y navega todos los Medidas del sistema'
        ]);
        Permission::create([
            'name'          => 'Crear Medidas',
            'slug'          => 'create.medida',
            'description'   => 'Crea un nuevo Medidas'
        ]);
        Permission::create([
            'name'          => 'Editar Medidas',
            'slug'          => 'edit.medida',
            'description'   => 'Edita un Medidas'
        ]);
        
        Permission::create([
            'name'          => 'Eliminar Medidas',
            'slug'          => 'delete.medida',
            'description'   => 'Elimina un Medidas'
        ]);
        //Comprobante    
        Permission::create([
            'name'          => 'Navergar Comprobante',
            'slug'          => 'view.comprobante',
            'description'   => 'Lista y navega todos los Comprobante del sistema'
        ]);
        Permission::create([
            'name'          => 'Index Comprobante',
            'slug'          => 'index.comprobante',
            'description'   => 'Index de Comprobante'
        ]);
        Permission::create([
            'name'          => 'Crear Comprobante',
            'slug'          => 'create.comprobante',
            'description'   => 'Crea una nueva Comprobante'
        ]);
        Permission::create([
            'name'          => 'Editar Comprobante',
            'slug'          => 'edit.comprobante',
            'description'   => 'Edita una comprobante'
        ]);
        Permission::create([
            'name'          => 'Eliminar Comprobante',
            'slug'          => 'delete.comprobante',
            'description'   => 'Edita una comprobante'
        ]);
        
        
    }
}
