@extends('layouts.template-portal')
@section('title', 'Abrir Ocorrência - Portal 156')
@section('request-cnpj')
    <link rel="stylesheet" href="/css/request.css">

    <div class="default-content content">
        <div class="container part-two cnpj">
            <div class="steps">
                <p class="first-step">Solicitante</p>
                <div class="separator"></div>
                <p class="second-step">Outros Solicitantes</p>
                <div class="separator"></div>
                <p class="third-step">Dados da Ocorrência</p>
            </div>
            
            <div class="data">
                <div class="info">
                    <p><strong>Informações da empresa</strong></p>
                    <div class="single-row">
                        <div class="input">
                            <label for="cnpj">CNPJ</label>
                            <input type="text" name="cnpj">
                        </div>
                    </div>

                     <div class="two-row">
                        <div class="input">
                            <label for="business-name">Nome*</label>
                            <input type="text" name="business-name" required>
                        </div>

                        <div class="input">
                            <label for="email">E-mail*</label>
                            <input type="email" name="email">
                        </div>
                     </div>

                     <div class="two-row">
                        <div class="input">
                            <label for="phone">Telefone*</label>
                            <input type="text" name="phone" required>
                        </div>

                        <div class="input">
                            <label for="sub-city">Incrição Municipal*</label>
                            <input type="text" name="sub-city">
                        </div>
                     </div>

                     <div class="two-row">
                        <div class="input">
                            <label for="street">Rua*</label>
                            <input type="text" name="street" required>
                        </div>

                        <div class="input">
                            <label for="cep">CEP*</label>
                            <input type="text" name="cep">
                        </div>
                     </div>
                </div>
                <div class="identity">
                    <p>Identidade</p>
                    <div class="three-row">
                        <div class="input">
                            <label for="name">Nome*</label>
                            <input type="text" name="name" required>
                        </div>

                        <div class="input">
                            <label for="email">E-mail*</label>
                            <input type="email" name="email" required>
                        </div>

                        <div class="input">
                            <label for="born">Data de nascimento</label>
                            <input type="date" name="born">
                        </div>
                    </div>

                    <div class="two-row">
                        <div class="input">
                            <label for="cellphone">Celular*</label>
                            <input type="text" name="cellphone" required>
                        </div>

                        <div class="input">
                            <label for="phone">Telefone</label>
                            <input type="text" name="phone">
                        </div>
                    </div>

                    <div class="four-row">
                        <div class="input">
                            <label for="marital-status">Estado Civil*</label>
                            <select name="marital-status" required>
                                <option value="select" disabled selected>Selecione</option>
                            </select>
                        </div>

                        <div class="input">
                            <label for="scholarity">Escolaridade*</label>
                            <select name="scholarity" class="select" required>
                                <option value="select" disabled selected>Selecione</option>
                            </select>
                        </div>

                        <div class="input">
                            <label for="gender">Gênero*</label>
                            <div class="radio">
                                <input type="radio" name="gender" checked required> Masculino <br>
                                <input type="radio" name="gender" required> Feminino
                            </div>
                        </div>
                        
                        <div class="input">
                            <label for="occupation">Profissão</label>
                            <input type="text" name="ocuppation">
                        </div>
                    </div>
                </div>

                <div class="address">
                    <p>Endereço</p>
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
                </div>
            </div>

            <div class="buttons">
                <a href="/ocorrencia" class="button">Voltar</a>
                <a href="/ocorrencia/final" class="button">Prosseguir</a>
            </div>
        </div>
    </div>
@endsection