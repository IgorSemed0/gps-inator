<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;
use App\Models\Provincia;

class ServicoController extends Controller
{
    public function excluir($id_do_servico)
    {
        $servico = Servico::findOrFail($id_do_servico);
        $servico->delete();
        return redirect()->route('lista_servicos')->with('success', 'Serviço excluído com sucesso!');
    }

    public function pesquisarServicosForm()
    {
        $provincias = Provincia::all();

        return view('pesquisar_servicos', compact('provincias'));
    }

    public function pesquisarServicos(Request $request)
    {
        $termoPesquisa = $request->input('termo_pesquisa');
        $provinciaFiltro = $request->input('provincia_filtro');

        $provincias = Provincia::all();

        if ($provinciaFiltro) {
            return redirect()->route('resultados-pesquisa-provincia', ['provincia' => $provinciaFiltro]);
        }

        $resultados = Servico::where('servico', 'like', "%$termoPesquisa%")
                             ->orWhere('descricao', 'like', "%$termoPesquisa%")
                             ->get();

        return view('resultados_pesquisa', compact('resultados', 'termoPesquisa', 'provincias', 'provinciaFiltro'));
    }

    public function show($id)
    {
        $servico = Servico::findOrFail($id);
        return view('show', compact('servico'));
    }
    public function exibirFormularioAtualizacao($id)
    {
        $servico = Servico::findOrFail($id);


        return view('formulario_atualizacao', compact('servico'));
    }

    public function atualizarServico(Request $request, $id)
    {
        $servico = Servico::findOrFail($id);

        $servico->update([
            'servico' => $request->input('servico'),
            'descricao' => $request->input('descricao'),
            'endereco' => $request->input('endereco'),
            'provincia' => $request->input('provincia'),
            'bilhete_identidade' => $request->input('bilhete_identidade'),
            'fotografia' => $request->input('fotografia'),
            'curriculum' => $request->input('curriculum'),
        ]);

        return redirect()->route('visualizar-servico', ['id' => $id])->with('success', 'Serviço atualizado com sucesso.');
    }


    public function paginaAtualizarServico($id)
    {
        $servico = Servico::findorFail($id);

        return view('formulario_atualizacao', ['servico' => $servico]);
    }

    public function listaServicos()
    {
        $servicos = Servico::all();
        return view('lista_servicos', compact('servicos'));
    }

    public function excluirServico($id_do_servico)
    {
        $servico = Servico::findOrFail($id_do_servico);
        $servico->delete();

        return redirect()->route('lista-servicos')->with('success', 'Serviço excluído com sucesso!');
    }














}
