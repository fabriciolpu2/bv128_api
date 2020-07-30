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

use App\User;




//Auth::routes();



// Registration Routes...
// Route::get('admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('admin/register', 'Auth\RegisterController@register');
Route::group(['prefix' => '', 'middleware' => 'setTheme:cliente'], function () {

    Route::get('/',  function () {
        return view("cliente.welcome");
    })->name('home.cliente');

    // Route::get('/projetos/bv-128', function () {
    //     return view("cliente.projetos.index");
    // })->name('projeto.bv-128');
    // bora tornar essa pagina pra controle de conteudo com acesso do professor
    Route::get('/projetos/bv-128', function () {
        return view("cliente.projetos.index");
    })->middleware(['auth', 'role:professor'])->name('projeto.bv-128');

    Route::get('/projetos/bv-128/aulas', function(){
        return view("cliente.aulas.index");
    })->name('projeto.aulas');
});


Route::group(['prefix' => 'admin', 'middleware' => 'setTheme:admin'], function () {

    Route::get('/welcome', 'WelcomeController@welcome')->name('welcome');
    // Authentication Routes...
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login')->name('loginpost');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('/home', 'HomeController@index')->name('home');



    Route::get('/change-password', 'HomeController@showChangePasswordForm');

    Route::post('/change-password', 'HomeController@changePassword')
        ->name('change-password');

    Route::get('/my-account', 'HomeController@myAccount')
        ->name('my.account.get');

    Route::post('/my-account', 'HomeController@myAccount')
        ->name('my.account.post');

    Route::get('usuarios', 'UserController@index')
        ->middleware(['auth', 'role:desenvolvedor|administrador'])
        ->name('usuarios.index');

    Route::get('usuarios/create', 'UserController@create')
        ->middleware(['auth', 'role:desenvolvedor|administrador'])
        ->name('usuarios.create');

    Route::post('usuarios/store', 'UserController@store')
        ->middleware(['auth', 'role:desenvolvedor|administrador'])
        ->name('usuarios.store');

    Route::post('usuarios/{id}/update', 'UserController@update')
        ->middleware(['auth', 'role:desenvolvedor|administrador'])
        ->name('usuarios.update');

    Route::get('usuarios/{id}/edit', 'UserController@edit')
        ->middleware(['auth', 'role:desenvolvedor|administrador'])
        ->name('usuarios.edit');

    Route::get('usuarios/{id}/destroy', 'UserController@destroy')
        ->middleware(['auth', 'role:desenvolvedor|administrador'])
        ->name('usuarios.destroy');

    Route::post('bloquear', 'UserController@bloquear')
        ->middleware(['auth', 'role:desenvolvedor|administrador'])
        ->name('bloquear');
});


Route::get('/contato', 'HomeController@contact')->name('contato');

Route::post('/contato', 'HomeController@sendMessage')->name('contato.form');


// Route::get('/user-create', function () {
//     User::firstOrCreate([
//         'name' => 'Admin',
//         'email' => 'adm.site@amplomed.com.br',
//         'password' => bcrypt($password = 'amplomed'),
//     ]);

//     echo 'feito melhor que perfeito by Joao Clineu';
// });

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Route::get('portal-bv128/alunos', 'AlunoController@index');
Route::get('portal-bv128/turmas', 'TurmaController@minhasTurmas')->name('minhas-turmas');
Route::get('portal-bv128/turmas/{id}/alunos', 'TurmaController@alunos')->name('turmas.alunos');
Route::get('portal-bv128/questionario/', 'QuestionarioController@questionarios')->name('questionarios.index');
Route::get('portal-bv128/questionario/{id}/questoes', 'QuestionarioController@questoes')->name('questoes.lista');
Route::get('portal-bv128/questionario/{id}/questoes/novo', 'QuestionarioController@questoesCreate')->name('questoes.nova');
Route::post('portal-bv128/questionario/{id}/questoes/store', 'QuestionarioController@questoesStore')->name('questoes.store');