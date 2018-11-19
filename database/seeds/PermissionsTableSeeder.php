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
        //Usuarios
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
            'slug'          => 'roles.view',
            'description'   => 'Lista y navega todos los roless del sistema'
        ]);
        Permission::create([
            'name'          => 'Crear roles',
            'slug'          => 'create.role',
            'description'   => 'Crea un nuevo roles'
        ]);
        Permission::create([
            'name'          => 'Editar roles',
            'slug'          => 'roles.edit',
            'description'   => 'Edita un roles'
        ]);
        
        Permission::create([
            'name'          => 'Eliminar roles',
            'slug'          => 'destroy.role',
            'description'   => 'Elimina un roles'
        ]);
        Permission::create([
            'name'          => 'Ver detalle de roll',
            'slug'          => 'show.roles',
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
            'name'          => 'Eliminar Comprobante',
            'slug'          => 'delete.comprobante',
            'description'   => 'Edita una comprobante'
        ]);

        //materia_prima 
        Permission::create([
            'name'          => 'Listar Materia Prima',
            'slug'          => 'view.materia_primas',
            'description'   => 'Listar las materias primas'
        ]);
        Permission::create([
            'name'          => 'Crear Materia Prima',
            'slug'          => 'create.materia_prima',
            'description'   => 'Crear Materia Prima'
        ]);
        Permission::create([
            'name'          => 'Eliminar Materia Prima',
            'slug'          => 'delete.materia_prima',
            'description'   => 'Crea una nueva Comprobante'
        ]);     
        Permission::create([
            'name'          => 'Editar Materia Prima',
            'slug'          => 'edit.materia_prima',
            'description'   => 'Editar Materia Prima'
        ]);

        //Proveedor
        Permission::create([
            'name'          => 'Listar Proveedor',
            'slug'          => 'view.proveedors',
            'description'   => 'Listar las materias primas'
        ]);
        Permission::create([
            'name'          => 'Crear Proveedor',
            'slug'          => 'create.proveedor',
            'description'   => 'Crear Proveedor'
        ]);
        Permission::create([
            'name'          => 'Eliminar Proveedor',
            'slug'          => 'delete.proveedor',
            'description'   => 'Crea una nueva Comprobante'
        ]);     
        Permission::create([
            'name'          => 'Editar Proveedor',
            'slug'          => 'edit.proveedor',
            'description'   => 'Editar Proveedor'
        ]);

        //bitacora
        Permission::create([
            'name'          => 'Ver Bitacora',
            'slug'          => 'bitacora',
            'description'   => 'Ver Bitacora'
        ]);
              
        
        
    }
}
