<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SistemaController;
use App\Http\Controllers\IdiomaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('Sistema.entrada');
    //return view('welcome');
});*/

Route::get('/',[SistemaController::class, 'entrada']);
Route::post('/validar',[SistemaController::class, 'validar']) -> name('validar');
Route::get('/ropciones',[SistemaController::class, 'mopciones']) -> name('nopciones');
Route::get('/salir',[SistemaController::class, 'salir']) -> name('salir');

Route::get('/seleccionar',[IdiomaController::class, 'seleccionar']) -> name('seleccionar');
Route::post('/procesar',[IdiomaController::class, 'procesar']) -> name('procesar');
Route::get('/saludar',[IdiomaController::class, 'saludar']) -> name('saludar');
Route::get('/despedir',[IdiomaController::class, 'despedir'])->name('despedir');

Route::get('login',[SistemaController::class,'entrada']);

/*
Route::post('procesar', function (Request $lenguaje) {
    //echo "Dependiendo el idioma te saludo :) <br>";
    $idioma = $lenguaje->input('idioma');
    switch ($idioma) {
        case 'español':
            return view('saludos.español');
            break;
        case 'italiano':
            return view('saludos.italiano');
            break;
        case 'frances':
            return view('saludos.frances');
            break;
        default:
            echo "Ese idioma no lo manejo";
            break;
    }
    //dump($lenguaje->all());
});

Route::get('saludar/{nombre?}', function ( $nombre = null ) {
    return view('saludos.español', compact('nombre'));
}) -> name('r1');

Route::get('salutare/{nombre?}', function ( $nombre ) {
    return view('saludos.italiano')->with('nombre', $nombre = null);
}) -> name('r2');

Route::get('saluer/{nombre?}', function ( $nombre = null ) {
    return view('saludos.frances', ['nombre' => $nombre]);
}) -> name('r3');*/