@extends('layouts.template-portal')
@section('title', 'Abrir Ocorrência - Portal 156')
@section('request-final')
    <link rel="stylesheet" href="/css/request.css">

    <div class="default-content content">
        <div class="container part-three">
            <div class="steps">
                <p class="first-step">Solicitante</p>
                <div class="separator"></div>
                <p class="second-step">Outros Solicitantes</p>
                <div class="separator"></div>
                <p class="third-step">Dados da Ocorrência</p>
            </div>

            <div class="service">
                <p>Serviço</p>
                <div class="three-row">
                    <div class="input">
                        <label for="">Tema*</label>
                        <select name="category" required>
                            <option value="selecione" selected disabled>Selecione</option>
                        </select>
                    </div>
    
                    <div class="input">
                        <label for="">Assunto*</label>
                        <select name="category" required>
                            <option value="selecione" selected disabled>Selecione</option>
                        </select>
                    </div>
    
                    <div class="input">
                        <label for="">Serviço*</label>
                        <select name="category" required>
                            <option value="selecione" selected disabled>Selecione</option>
                        </select>
                    </div>
                </div>

                <div class="text-area">
                    <div class="input">
                        <label for="description">Descrição*</label>
                        <textarea name="description" ></textarea>
                        <button class="button">Anexar arquivo</button>
                    </div>
                </div>
            </div>

            <div class="address">
                <p>Local da Ocorrência</p>
                <div class="two-row">
                    <div class="input">
                        <label for="cep">CEP*</label>
                        <input type="text" name="cep" required>
                        <button class="button">Buscar por CEP</button>
                    </div>

                    <div class="input">
                        <label for="street">Rua*</label>
                        <input type="text" name="street" required>
                    </div>
                </div>

                <div class="four-row">
                    <div class="input">
                        <label for="number">Número*</label>
                        <input name="number" type="text" required>
                    </div>

                    <div class="input">
                        <label for="complement">Complemento</label>
                        <input name="complement" type="text">
                    </div>

                    <div class="input">
                        <label for="district">Bairro*</label>
                        <input name="district" type="text" required>
                    </div>

                    <div class="input">
                        <label for="city">Cidade*</label>
                        <input name="city" type="text" required>
                    </div>
                </div>

            <div class="buttons">
                <a href="/ocorrencia/cpf" class="button">CPF</a>
                <a href="/ocorrencia/cnpj" class="button">CNPJ</a>
                <a href="/ocorrencia/finalizado" class="button">Finalizar</a>
            </div>
        </div>
    </div>
@endsection