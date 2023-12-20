<!-- resources/views/lista_servicos.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Lista de Serviços</h2>

        @if($servicos && count($servicos) > 0)
            <ul>
                @foreach($servicos as $servico)
                    <li class="service-item">
                        {{ $servico->servico }}
                        <a href="{{ route('formulario-atualizacao', ['id' => $servico->id]) }}" class="btn-update">Atualizar</a>

                        <a href="{{ route('excluir.servico', $servico->id) }}" class="btn btn-danger">Excluir</a>
                    </li>
                @endforeach
            </ul>
        @else
            <p>Nenhum serviço encontrado.</p>
        @endif
    </div>

@endsection
