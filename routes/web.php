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
    return view('welcome');
});

Route::match(['get', 'post'], '/botman', 'BotManController@handle');
Route::get('/botman/tinker', 'BotManController@tinker');

Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login')->name('login');

Route::group(['middleware'=>['web']], function(){
    Route::prefix('agencia')->group(function () {
        Route::get('register', 'Auth\RegisterController@showRegistrationFormAgencia')->name('registerAgencia');
        Route::group(['middleware'=>['auth']], function(){
            Route::get('dashboard', 'DashboardController@index')->name('DashboardIndex');
        });
    });
});


Route::get('select', 'AgenciaController@select');

Route::get('/carros', 'CarroController@carros')->name('carros');
Route::get('/grupocarros', 'CarroController@grupocarros')->name('grupocarros');
Route::get('singleCar/{placa}',['as' => 'SingleCar', 'uses' => 'CarroController@singleCar']);
Route::get('/redeagencia', 'AgenciaController@index2')->name('redeagencia');

Route::get('/verifica_cpf/{cpf}', 'Auth\RegisterController@existsCpf');
Route::get('/verifica_email/{email}', 'Auth\RegisterController@existsEmail');
Route::get('/verifica_cnh/{cnh}', 'Auth\RegisterController@existsCnh');
Route::get('/verifica_registro/{registro}', 'Auth\RegisterController@existsRegistro');
Route::get('/verifica_cnpj/{cnpj}', 'Auth\RegisterController@existsCnpj');


Auth::routes();

Route::group(['middleware'=>['web', 'auth']], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
});

