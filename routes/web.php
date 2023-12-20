<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Servico;
use App\Http\Controllers\ServicoController;
use App\Models\Provincia;

Route::get('/', function () {
    return view('home');
});

Route::middleware('web')->group(function () {
    Route::get('/pesquisar-servicos', [ServicoController::class, 'pesquisarServicosForm'])->name('pesquisar-servicos');
    Route::post('/pesquisar-servicos', [ServicoController::class, 'pesquisarServicos'])->name('pesquisar-servicos');
});

Route::post('/cadastrar-servico', function (Request $dados) {
    Servico::create([
        'servico' => $dados->servico,
        'descricao' => $dados->descricao,
        'endereco' => $dados->endereco,
        'provincia' => $dados->provincia,
        'bilhete_identidade' => $dados->bilhete_identidade,
        'fotografia' => $dados->fotografia,
        'curriculum' => $dados->curriculum
    ]);
    return view('servico');
});


Route::get('/forms', function () {
    return view('forms');
})->name('forms');
Route::get('/servico', function () {
    return view('servico');
})->name('servico');
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/formulario_atualizacao', function () {
    return view('formulario_atualizacao');
})->name('formulario_atualizacao');
Route::get('/lista_servicos', function () {
    return view('lista_servicos');
})->name('lista_servicos');
Route::get('/show', function () {
    return view('show');
})->name('show');

Route::get('/servico/{id}', 'App\Http\Controllers\ServicoController@show')->name('visualizar-servico');

Route::get('/mostrar-servico/{id_do_servico}', function ($id_do_servico) {
    $servico = Servico::findOrFail($id_do_servico);
});

Route::get('/formulario-atualizacao/{id_do_servico}', function ($id_do_servico) {
    $servico = Servico::findOrFail($id_do_servico);
    return view('formulario_atualizacao', ['servico' => $servico]);
});
Route::put('/atualizar-servico/{id_do_servico}', function (Request $dados, $id_do_servico) {
    $servico = Servico::findOrFail($id_do_servico);
    $servico->servico = $dados->servico;
    $servico->endereco = $dados->endereco;
    $servico->descricao = $dados->descricao;
    $servico->provincia = $dados->provincia;
    $servico->bilhete_identidade = $dados->bilhete_identidade;
    $servico->fotografia = $dados->fotografia;
    $servico->curriculum = $dados->curriculum;
    $servico->save();

    return view('show', ['servico' => $servico]);

});

Route::get('/excluir-servico/{id}', function ($id) {
    $servico = Servico::findOrFail($id);
    $servico->delete();

    return redirect()->route('lista_servicos')->with('success', 'Serviço excluído com sucesso!');
})->name('excluir.servico');
//
Route::get('/lista-servicos', 'ServicoController@listaServicos')->name('lista-servicos');
Route::get('/formulario-atualizacao/{id}', 'ServicoController@paginaAtualizarServico')->name('formulario-atualizacao');

Route::get('/lista_servicos', [ServicoController::class, 'listaServicos'])->name('lista_servicos')->middleware('web');
