@extends('layouts.template-portal')
@section('title', 'Abrir Ocorrência - Portal 156')
@section('request')
    <link rel="stylesheet" href="/css/request.css">

    {{-- First Part --}}
    <div class="default-content content">
        <div class="container part-one">
            <div class="steps">
                <p class="first-step">Solicitante</p>
                <div class="separator"></div>
                <p class="second-step">Outros Solicitantes</p>
                <div class="separator"></div>
                <p class="third-step">Dados da Ocorrência</p>
            </div>

            <div class="types">
                <div class="type">
                    <p>Tipo de identificação*</p>
                    <div class="input">
                        <input type="radio" checked  name="id"> Aberto <br>
                        <input type="radio" name="id"> Sigilosa
                    </div>
                </div>

                <div class="type">
                    <p>Tipo de solicitante*</p>
                    <div class="input">
                        <input type="radio" checked name="person"> Pessoa Física <br>
                        <input type="radio" name="person"> Pessoa Jurídica
                    </div>
                </div>

                <div class="type">
                    <p>Tipo de solicitação*</p>
                    <div class="input">
                        <input type="radio" checked name="request"> Única<br>
                        <input type="radio" name="request"> Coletiva
                    </div>
                </div>
            </div>

            <div class="buttons">
                <a href="/" class="button">Voltar</a>
                <a href="/ocorrencia/cpf" class="button">CPF</a>
                <a href="/ocorrencia/cnpj" class="button">CNPJ</a>
            </div>
        </div>
    </div>
@endsection