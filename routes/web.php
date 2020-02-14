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

    Route::get('/', 'WelcomeController@welcome')->name('welcome');

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


    // --------------------------------------------------- 

    Route::get('servicos', 'ServicoController@index')
        ->name('servicos.index');

    Route::get('servicos/create', 'ServicoController@create')
        ->name('servicos.create');

    Route::post('servicos/store', 'ServicoController@store')
        ->name('servicos.store');

    Route::post('servicos/{id}/update', 'ServicoController@update')
        ->name('servicos.update');

    Route::get('servicos/{id}/edit', 'ServicoController@edit')
        ->name('servicos.edit');

    Route::get('servicos/{id}/destroy', 'ServicoController@destroy')
        ->name('servicos.destroy');

    Route::get('filiais', 'FilialController@index')
        ->name('filiais.index');

    Route::get('filiais/create', 'FilialController@create')
        ->name('filiais.create');

    Route::post('filiais/store', 'FilialController@store')
        ->name('filiais.store');

    Route::post('filiais/{id}/update', 'FilialController@update')
        ->name('filiais.update');

    Route::get('filiais/{id}/edit', 'FilialController@edit')
        ->name('filiais.edit');

    Route::get('filiais/{id}/destroy', 'FilialController@destroy')
        ->name('filiais.destroy');

    Route::get('clientes', 'ClienteController@index')
        ->name('clientes.index');

    Route::get('clientes/create', 'ClienteController@create')
        ->name('clientes.create');

    Route::post('clientes/store', 'ClienteController@store')
        ->name('clientes.store');

    Route::post('clientes/{id}/update', 'ClienteController@update')
        ->name('clientes.update');

    Route::get('clientes/{id}/edit', 'ClienteController@edit')
        ->name('clientes.edit');

    Route::get('clientes/{id}/destroy', 'ClienteController@destroy')
        ->name('clientes.destroy');

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
