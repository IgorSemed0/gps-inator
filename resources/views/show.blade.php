@extends('layouts.app')

@section('content')
    <div>
        <div id="detalhes-box">
            <h2>Detalhes do Serviço</h2>
            <h3>{{ $servico->servico }}</h3>
            <p><strong>Descrição:</strong> {{ $servico->descricao }}</p>
            <p><strong>Província:</strong> {{ $servico->provincia }}</p>
            <p><strong>Endereço:</strong> {{ $servico->endereco }}</p>

            <h4>Documentos Requisitados:</h4>
            <ul>
                @if($servico->bilhete_identidade)
                    <li>Bilhete de Identidade</li>
                @endif

                @if($servico->fotografia)
                    <li>Fotografias</li>
                @endif

                @if($servico->curriculum)
                    <li>Curriculum</li>
                @endif
            </ul>
        </div>
    </div>

    <style>
        #detalhes-box {
            background-color: #262626;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
            padding: 20px;
            max-width: 600px;
            width: 100%;
            margin-top: 20px;
        }

        #detalhes-box h3 {
            color: #00bfff;
        }

        #detalhes-box p, #detalhes-box li {
            color: #ffffff;
        }

        #detalhes-box ul {
            list-style: none;
            padding: 0;
        }
    </style>
@endsection
