<?php



Route::get('/', 'Auth\LoginController@showLoginForm');

Route::post('/login', 'Auth\LoginController@login')->name('login');



Route::middleware(['auth'])->group(function(){

    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    //Bitacora
    Route::get('bitacora/', 'BitacoraController@index')->name('bitacora');


    //roles
    Route::get('roles/', 'RoleController@index')->name('roles.view')
        ->middleware('permission:roles.view');

    Route::post('roles/store', 'RoleController@store')->name('store.role')
        ->middleware('permission:store.role');

    Route::get('roles/create', 'RoleController@create')->name('create.role')
        ->middleware('permission:create.role');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
        ->middleware('permission:roles.edit'); 

    Route::get('roles/{role}', 'RoleController@show')->name('show.roles')
        ->middleware('permission:show.roles');

    Route::delete('roles/{role}', 'RoleController@destroy')->name('destroy.role')
        ->middleware('permission:destroy.role');      

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
        ->middleware('permission:roles.edit');

    //usuarios
    Route::get('/usuario', 'UserController@viewUsers')->name('view.users')
        ->middleware('permission:view.users');

    Route::get('/usuario/crear', 'UserController@create')->name('create.user')
    ->middleware('permission:create.user');

    Route::post('/usuario/save', 'UserController@store')->name('store.user')
    ->middleware('permission:create.users');

    Route::get('/usuario/eliminar/{user}', 'UserController@destroy')->name('delete.user')
    ->middleware('permission:delete.user');

    Route::get('/usuario/editar/{user}', 'UserController@edit')->name('edit.user')
    ->middleware('permission:edit.user');

    Route::post('/usuario/update/{user}','UserController@update')->name('update.user')
    ->middleware('permission:edit.user');
    
    //Comprobante
    Route::get('comprobante', 'ComprobanteController@index')->name('index.comprobante')
    ->middleware('permission:index.comprobante');

    Route::get('comprobante/delete/{id}', 'ComprobanteController@destroy')->name('delete.comprobante')
    ->middleware('permission:index.comprobante');


    Route::get('comprobante/ver/{id}', 'ComprobanteController@view')->name('view.comprobante')
    ->middleware('permission:view.comprobante');
    
    Route::get('comprobante/crear', 'ComprobanteController@create')->name('create.comprobante')
    ->middleware('permission:create.comprobante');

    Route::post('comprobante/guardar', 'ComprobanteController@store')->name('store.comprobante')
    ->middleware('permission:store.comprobante');
    
    //medidas
    Route::get('/medidas', 'MedidaController@index')->name('view.medidas');

    Route::get('/medida/crear', 'MedidaController@create')->name('create.medida');

    Route::post('/medida/guardar', 'MedidaController@store')->name('store.medida');

    Route::get('/medida/eliminar/{medida}', 'MedidaController@destroy')->name('delete.medida');

    Route::get('/medida/editar/{medida}', 'MedidaController@edit')->name('edit.medida');

    Route::post('/medida/update/{medida}','MedidaController@update')->name('update.medida');

    //materia
    
    Route::get('/materia_prima', 'MateriaPrimaController@index')->name('view.materia_primas');

    Route::get('/materia_prima/crear', 'MateriaPrimaController@create')->name('create.materia_prima');

    Route::post('/materia_prima/guardar', 'MateriaPrimaController@store')->name('store.materia_prima');

    Route::get('/materia_prima/eliminar/{materia_prima}', 'MateriaPrimaController@destroy')->name('delete.materia_prima');

    Route::get('/materia_prima/editar/{materia_prima}', 'MateriaPrimaController@edit')->name('edit.materia_prima');

    Route::post('/materia_prima/update/{materia_prima}','MateriaPrimaController@update')->name('update.materia_prima');
    

    //Proveedor
    Route::get('/proveedor', 'ProveedorController@index')->name('view.proveedors')
;

    Route::get('/proveedor/crear', 'ProveedorController@create')->name('create.proveedor')
 ;

    Route::post('/proveedor/guardar', 'ProveedorController@store')->name('store.proveedor')
 ;

    Route::get('/proveedor/eliminar/{proveedor}', 'ProveedorController@destroy')->name('delete.proveedor')
 ;

    Route::get('/proveedor/editar/{proveedor}', 'ProveedorController@edit')->name('edit.proveedor');

    Route::post('/proveedor/update/{proveedor}','ProveedorController@update')->name('update.proveedor');
    
   //Productos
    
   Route::get('/producto', 'ProductoController@index')->name('index.productos');
   
   Route::get('/producto/crear', 'ProductoController@create')->name('create.producto');

   Route::get('/producto/{producto}', 'ProductoController@show')->name('show.productos');

   Route::post('/producto/guardar', 'ProductoController@store')->name('store.producto');

   Route::get('/producto/eliminar/{producto}', 'ProductoController@destroy')->name('delete.producto');

   Route::get('/producto/editar/{producto}', 'ProductoController@edit')->name('edit.producto');

   Route::post('/producto/update/{producto}','ProductoController@update')->name('update.producto');

   //Recetas
    
   Route::get('/recetas', 'RecetaController@index')->name('index.receta');
   
   Route::get('/receta/crear', 'RecetaController@create')->name('create.receta');

   Route::get('/receta/{receta}', 'RecetaController@show')->name('show.receta');

   Route::post('/receta/guardar', 'RecetaController@store')->name('store.receta');

   Route::get('/receta/eliminar/{receta}', 'RecetaController@destroy')->name('delete.receta');

   Route::get('/receta/editar/{receta}', 'RecetaController@edit')->name('edit.receta');

   Route::post('/receta/update/{receta}','RecetaController@update')->name('update.receta');

   //inventario
    
   Route::get('/inventario', 'InventarioController@index')->name('index.inventario');
   
   Route::get('/inventario/crear', 'InventarioController@create')->name('create.inventario');

   Route::get('/inventario/{inventario}', 'InventarioController@show')->name('show.inventario');

   Route::post('/inventario/guardar', 'InventarioController@store')->name('store.inventario');

   Route::get('/inventario/eliminar/{inventario}', 'InventarioController@destroy')->name('delete.inventario');

   Route::get('/inventario/editar/{inventario}', 'InventarioController@edit')->name('edit.inventario');

   Route::post('/inventario/update/{inventario}','InventarioController@update')->name('update.inventario');

   Route::post('/inventario/finish/{inventario}','InventarioController@finish')->name('finish.inventario');

   //Cliente
    
   Route::get('/cliente', 'ClienteController@index')->name('index.cliente');
   
   Route::get('/cliente/crear', 'ClienteController@create')->name('create.cliente');

   Route::get('/cliente/{cliente}', 'ClienteController@show')->name('show.cliente');

   Route::post('/cliente/guardar', 'ClienteController@store')->name('store.cliente');

   Route::get('/cliente/eliminar/{cliente}', 'ClienteController@destroy')->name('delete.cliente');

   Route::get('/cliente/editar/{cliente}', 'ClienteController@edit')->name('edit.cliente');

   Route::post('/cliente/update/{cliente}','ClienteController@update')->name('update.cliente');

   
});







