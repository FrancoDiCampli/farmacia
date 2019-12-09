<?php



// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('layouts.main');
});

Route::resource('usuarios', 'UsuariosController');
Route::resource('productos', 'ProductosController');
Route::resource('inventarios', 'InventariosController');
Route::resource('reportes', 'ReportesController');

Route::get('/inventarios/crear/{id}', 'InventariosController@crear');
