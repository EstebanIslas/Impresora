<?php

use App\Http\Controllers\ImpresoraController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

#Impresion Termica
Route::get('impresion/', [ImpresoraController::class, 'impresion'])->name('impresion');
Route::get('impresion/index', [ImpresoraController::class, 'index'])->name('index');

#PWA
Route::get('/offline', function () {    
    return view('vendor/laravelpwa/offline');
});

#Recibir form de otro proyecto
Route::get('enviar/', [ImpresoraController::class, 'enviar'])->name('enviar');


#Impresion con JS
Route::get('print_js/', [ImpresoraController::class, 'print_js'])->name('print_js'); //Metodo para mostrar impresoras
Route::get('print_direct/', [ImpresoraController::class, 'print_direct'])->name('print_direct'); //Metodo para imprimir directo

