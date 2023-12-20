@extends('layouts.app') {{-- Certifique-se de ter uma layout padrão definida --}}

@section('content')
    <div class="container">
        <h1>Pesquisar Serviços</h1>

        {{-- Adicione seu conteúdo aqui --}}
        <form action="{{ route('pesquisar-servicos') }}" method="post">
            @csrf
            <label for="termo_pesquisa">Termo de Pesquisa:</label>
            <input type="text" name="termo_pesquisa" id="termo_pesquisa" required>

            <label for="provincia_filtro">Filtrar por Província:</label>
            <select name="provincia_filtro" id="provincia_filtro">
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
                @foreach ($provincias as $provincia)
                    <option value="{{ $provincia->id }}">{{ $provincia->nome }}</option>
                @endforeach
            </select>

            <button type="submit">Pesquisar</button>
        </form>

        {{-- Exiba os resultados da pesquisa --}}
        @if(isset($resultados))
            <h2>Resultados da Pesquisa:</h2>
            <ul>
                @forelse ($resultados as $resultado)
                    <li>{{ $resultado->servico }} - {{ $resultado->descricao }}</li>
                @empty
                    <p>Nenhum resultado encontrado.</p>
                @endforelse
            </ul>
        @endif
    </div>
@endsection
