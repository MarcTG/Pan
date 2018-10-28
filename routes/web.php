<?php



Route::get('/', 'Auth\LoginController@showLoginForm');

Route::get('/usuarios', 'UserController@viewUsers')->name('view.users');

Route::get('/crearUsuario', 'UserController@create')->name('create.user');

Route::get('/logout', 'UserController@logout')->name('logout');

Route::post('/registrarUsuario', 'UserController@store')->name('register');

Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('dashboard', 'DashboardController@index')->name('dashboard');