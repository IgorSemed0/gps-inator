@extends('layouts.app')

@section('content')
    <h2>Resultados da Pesquisa para "{{ $termoPesquisa }}"</h2>

    <form action="{{ route('pesquisar-servicos') }}" method="GET" id="pesquisaForm">
        <label for="provincia_filtro">Filtrar por Província:</label>
        <select name="provincia_filtro" id="provincia_filtro" onchange="submitForm()">
            <option value="">Todas</option>
            <option value="Bengo">Bengo</option>
            <option value="Benguela">Benguela</option>
            <option value="Bié">Bié</option>
            <option value="Cabinda">Cabinda</option>
            <option value="Cuando Cubango">Cuando Cubango</option>
            <option value="Cuanza Norte">Cuanza Norte</option>
            <option value="Cuanza Sul">Cuanza Sul</option>
            <option value="Cunene">Cunene</option>
            <option value="Huambo">Huambo</option>
            <option value="Huíla">Huíla</option>
            <option value="Luanda">Luanda</option>
            <option value="Lunda Norte">Lunda Norte</option>
            <option value="Lunda Sul">Lunda Sul</option>
            <option value="Malanje">Malanje</option>
            <option value="Moxico">Moxico</option>
            <option value="Namibe">Namibe</option>
            <option value="Uíge">Uíge</option>
            <option value="Zaire">Zaire</option>
            @foreach ($provincias as $prov)
                <option value="{{ $prov->id }}" @if ($prov->id == $provincia) selected @endif>{{ $prov->nome }}</option>
            @endforeach
        </select>

    </form>

    @if(count($resultados) > 0)
        <div style="margin-top: 20px;">
            @foreach($resultados as $resultado)
                <div style="border: 1px solid #ccc; border-radius: 8px; padding: 15px; margin-bottom: 15px;">
                    <h3><a href="{{ route('visualizar-servico', $resultado->id) }}">{{ $resultado->servico }}</a></h3>
                    <p>{{ $resultado->descricao }}</p>
                </div>
            @endforeach
        </div>
    @else
        <p>Nenhum resultado encontrado para "{{ $termoPesquisa }}".</p>
    @endif

    <script>
        function submitForm() {
            document.getElementById("pesquisaForm").submit();
        }
    </script>
@endsection
