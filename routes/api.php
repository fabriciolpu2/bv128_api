<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/escolas/{versaoLocal}', 'EscolaController@listaVersao')->name('lista-escolas-versao');
Route::get('/escolas', 'EscolaController@index')->name('lista-escolas');
Route::get('/turmas', 'TurmaController@index')->name('lista-turmas');
Route::get('/turmas/{versaoLocal}', 'TurmaController@listaVersao')->name('lista-turmas-versao');
Route::get('/alunos', 'Api/AlunoController@index')->name('lista-alunos');
Route::get('/alunos/{versaoLocal}', 'AlunoController@listaVersao')->name('lista-alunos-versao');

Route::get('/questionarios', 'QuestionarioController@index')->name('lista-questionario');
Route::get('/questionarios/{versaoLocal}', 'QuestionarioController@listaVersao')->name('lista-questionario-versao');
Route::get('/questoes', 'QuestoesController@index')->name('lista-questoes');
Route::get('/questoes/{versaoLocal}', 'QuestoesController@listaVersao')->name('lista-questoes-versao');

Route::get('/alternativas', 'AlternativasQuestoesController@index')->name('lista-alternativas');
Route::get('/alternativas/{versaoLocal}', 'AlternativasQuestoesController@listaVersao')->name('lista-alternativas-versao');

Route::get('/versao/{model}', 'ConfiguracaoController@show')->name('versao-model');