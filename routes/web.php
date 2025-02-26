<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\NotaController;
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

Route::get('/home', function() {
    return view('dashboard');  
})->middleware('auth');




// routes/web.php



Route::resource('estudiantes', EstudianteController::class);




Route::resource('notas', NotaController::class);


Route::resource('docentes', DocenteController::class);


Route::get('/index', function () {
    return view('index');
});
