<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Servico;

Route::get('/', function () {
    return view('forms');
});


Route::post('/cadastrar-servico', function(Request $dados){
    Servico::create([
        'servico' => $dados->servico,
        'descricao' => $dados->descricao,
        'endereco' => $dados->endereco,
        'provincia' => $dados->provincia,
        'bilhete_identidade' => $dados->bi,
        'fotografia' => $dados->fotografia,
        'curriculum' => $dados->curriculum

    ]);

    echo "Sucess";
});


Route::get('/mostrar-servico/{id_do_servico}', function ($id_do_servico) {
    $servico = Servico::findOrFail($id_do_servico);
    echo $servico -> servico;
    echo "<br />";
    echo $servico -> descricao;
    echo "<br />";
    echo $servico -> endereco;
    echo "<br />";
    echo $servico -> provincia;
    echo "<br />";
    echo $servico -> bilhete_identidade;
    echo "<br />";
    echo $servico -> fotografia;
    echo "<br />";
    echo $servico -> curriculum;

});


