<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/', 'AgenciaController@index');

Route::get('select', 'AgenciaController@select');

Route::get('/teste', function () {
    return view('/teste');
});


Route::get('/carros', 'CarroController@carros')->name('carros');

Route::get('/verifica_cpf/{cpf}', 'Auth\RegisterController@existsCpf');
Route::get('/verifica_email/{email}', 'Auth\RegisterController@existsEmail');
Route::resource('/cnh', 'CnhController');

Auth::routes();

Route::group(['middleware'=>['web', 'auth']], function(){
	
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
});

