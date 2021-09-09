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

Route::get('/escolas/{versaoLocal}', 'Api\EscolaController@listaVersao')->name('lista-escolas-versao');
Route::get('/escolas', 'Api\EscolaController@index')->name('lista-escolas');
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


Route::get('/versao/{model}', 'Api\ConfiguracaoController@show')->name('versao-model');
Route::post('/historico', 'Api\AlunoController@historico');
Route::post('/aluno_respostas', 'Api\AlunoController@alunosQuestoes');
Route::post('/recompensas_aluno', 'Api\AlunoController@recompensasAluno');
//post 

Route::get('make-history', function() {
    //$alunos = DB::table('alunos')->get();
    //foreach ($alunos as $aluno) {
    for($i = 1100; $i < 1141; $i++){
        //dd();
        DB::table('aluno_historicos')->insert([
            'id'=> $i, 
            'aluno_id'=> $i, 
            'missoes_concluidas'=> 0, 
            'versao'=> 0, 
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);
    }
});


Route::get('v1/aluno/{matricula}', 'Api\AlunoController@show');
Route::get('v1/recompensa/{id}', 'Api\AlunoController@recompensa');

