<?php



Route::get('/', 'Auth\LoginController@showLoginForm');

//usuarios
Route::get('/usuarios', 'UserController@viewUsers')->name('view.users');

Route::get('/usuario/crear', 'UserController@create')->name('create.user');

Route::get('/usuario/eliminar/{user}', 'UserController@destroy')->name('delete.user');

Route::get('/usuario/editar/{user}', 'UserController@edit')->name('edit.user');

Route::post('/usuario/update/{user}','UserController@update')->name('update.user');



Route::post('/registrarUsuario', 'UserController@store')->name('create.user');

Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('dashboard', 'DashboardController@index')->name('dashboard');