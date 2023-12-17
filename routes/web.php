<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Servico;
use App\Models\Documento;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('forms');
});


Route::post('/cadastrar-servico', function(Request $dados){
    Servico::create([
        'servico' => $dados->servico,
        'descricao' => $dados->descricao,
        'endereco' => $dados->endereco,
        'provincia' => $dados->provincia

    ]);
    Documento::create([
        'bilhete_identidade' => $dados->bi,
        'fotografia' => $dados->fotografia,
        'curriculum' => $dados->curriculum

    ]);
    echo "Sucess";

});

