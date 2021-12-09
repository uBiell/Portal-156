@extends('layouts.template-portal')
@section('title', 'Abrir Ocorrência - Portal 156')
@section('request-modal')
    <link rel="stylesheet" href="/css/request.css">

    <div class="default-content content">
        <div class="container completed">
            <div class="steps">
                <p class="first-step">Solicitante</p>
                <div class="separator"></div>
                <p class="second-step">Outros Solicitantes</p>
                <div class="separator"></div>
                <p class="third-step">Dados da Ocorrência</p>
            </div>

            <div class="check-request">
                <i class="far fa-check-circle"></i>
                <p>Ocorrência aberta com sucesso!</p>
            </div>

            <div class="buttons">
                <a href="/" class="button">Voltar</a>
            </div>
        </div>
    </div>
@endsection