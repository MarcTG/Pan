<?php



Route::get('/', 'Auth\LoginController@showLoginForm');

Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('dashboard', 'DashboardController@index')->name('dashboard');

//usuarios
Route::get('/usuario', 'UserController@viewUsers')->name('view.users');

Route::get('/usuario/crear', 'UserController@create')->name('create.user');

Route::post('/usuario/save', 'UserController@store')->name('store.user');



Route::get('/usuario/eliminar/{user}', 'UserController@destroy')->name('delete.user');

Route::get('/usuario/editar/{user}', 'UserController@edit')->name('edit.user');

Route::post('/usuario/update/{user}','UserController@update')->name('update.user');

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
Route::get('/proveedor', 'ProveedorController@index')->name('view.proveedors');

Route::get('/proveedor/crear', 'ProveedorController@create')->name('create.proveedor');

Route::post('/proveedor/guardar', 'ProveedorController@store')->name('store.proveedor');

Route::get('/proveedor/eliminar/{proveedor}', 'ProveedorController@destroy')->name('delete.proveedor');

Route::get('/proveedor/editar/{proveedor}', 'ProveedorController@edit')->name('edit.proveedor');

Route::post('/proveedor/update/{proveedor}','ProveedorController@update')->name('update.proveedor');

//Comprobante
Route::get('comprobante', 'ComprobanteController@index')->name('index.comprobante');

Route::get('comprobante/ver/{id}', 'ComprobanteController@view')->name('view.comprobante');

Route::get('comprobante/crear', 'ComprobanteController@create')->name('create.comprobante');

Route::post('comprobante/guardar', 'ComprobanteController@store')->name('store.comprobante');

