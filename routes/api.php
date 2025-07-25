<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
Route::middleware('game')->group(function () {
    Route::get('/escolas/{versaoLocal}', 'Api\EscolaController@listaVersao')->name('lista-escolas-versao');
    Route::get('/escolas', 'Api\EscolaController@index')->name('lista-escolas')->middleware('game');
    Route::get('/turmas', 'TurmaController@index')->name('lista-turmas');
    Route::get('/turmas/{versaoLocal}', 'TurmaController@listaVersao')->name('lista-turmas-versao');
    Route::get('/alunos', 'Api\AlunoController@index')->name('lista-alunos');
    Route::get('/alunos/{versaoLocal}', 'Api\AlunoController@listaVersao')->name('lista-alunos-versao');
    Route::get('/questionarios', 'Api\QuestionarioController@index')->name('lista-questionario');
    Route::get('/questionarios/{versaoLocal}', 'Api\QuestionarioController@listaVersao')->name('lista-questionario-versao');
    Route::get('/questoes', 'Api\QuestoesController@index')->name('lista-questoes');
    Route::get('/questoes/{versaoLocal}', 'Api\QuestoesController@listaVersao')->name('lista-questoes-versao');
    Route::get('/alternativas', 'Api\AlternativasQuestoesController@index')->name('lista-alternativas');
    Route::get('/alternativas/{versaoLocal}', 'Api\AlternativasQuestoesController@listaVersao')->name('lista-alternativas-versao');
    Route::get('/recompensas/{versaoLocal}', 'Api\AlunoController@listaVersao')->name('lista-recompensas-versao');

    Route::get('/versao/{model}', 'Api\ConfiguracaoController@show')->name('versao-model');
    Route::post('/historico', 'Api\AlunoController@historico');
    Route::post('/aluno_respostas', 'Api\AlunoController@alunosQuestoes');
    Route::post('/recompensas_aluno', 'Api\AlunoController@recompensasAluno');
//post

    Route::get('make-history', 'Api\HistoryController');


    Route::get('v1/aluno/{matricula}', 'Api\AlunoController@show');
    Route::get('v1/recompensa/{id}', 'Api\AlunoController@recompensa');


    Route::post('/lancamento', 'LancamentoController@store')->name('novo.lancamento');
    Route::get('/saldo', 'LancamentoController@saldo');
});
