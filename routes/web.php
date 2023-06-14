<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

use App\Http\Middleware\Mid;

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
    return view('templates.main')->with('titulo', "");
})->name('index');

Route::resource('eixos', 'EixoController');

Route::resource('cursos', 'CursoController');

Route::resource('professores', 'ProfessorController');

Route::resource('diciplinas', 'DiciplinasController');

Route::resource('docencia', 'DocenciaController');

Route::resource('alunos', 'AlunoController');

Route::resource('matriculas', 'MatriculaController');

Route::get('/', function() {
    return view('welcome');
})->middleware('Mid');