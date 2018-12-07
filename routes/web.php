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
    return redirect()->route('dashboard');
});

Auth::routes();
Route::group(['midleware' => 'auth'], function () {

    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    
    Route::resource('/aluno', 'AlunoController');

    Route::resource('/curso', 'CursoController');

    Route::resource('/turma', 'TurmaController');

    Route::resource('/planopagamento', 'PlanoPagamentoController');

    Route::resource('/funcionario', 'FuncionarioController');

    Route::resource('/unidade', 'UnidadeController');

    Route::post('/aluno/matricula', 'AlunoController@setMatricula')->name('aluno.matriculaset');
    
    Route::get('/aluno/matriculas/{id}', 'AlunoController@matricula')->name('aluno.matricula');
    
    Route::delete('/aluno/matricula-cancelar/{id}', 'AlunoController@cancelarMatricula')->name('aluno.cancela-matricula');

    Route::get('/financeiro', function(){
        return view('painel.financeiro.dashboard');
    })->name('painel.financeiro');

    Route::get('/financeiro/carne/{contrato}', function ($contrato) {
        $contrato = App\Contrato::findOrFail($contrato);
        return view('painel.financeiro.aluno-carne', compact('contrato'));
    })->name('imprimir.carne');

});
