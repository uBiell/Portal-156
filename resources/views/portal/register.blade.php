@extends('layouts.template-portal')
@section('title', 'Cadastro - Portal 156')
@section('register')
    <link rel="stylesheet" href="/css/registration.css">
    <div class="default-content content">
        <div class="container form">
            <p>Para ser cliente (pessoa Física ou Jurídica), é necessário preencher corretamente o formulário abaixo com os respectivos dados cadastrais. Os campos em NEGRITO são de preenchimento obrigatório e essenciais para processarmos suas solicitações.</p>

            <div class="separator"></div>

            <form class="register-form" action="/"> 
                <div class="four-row">
                    <div class="input">
                        <label for="cpf"><strong>CPF</strong></label>
                        <input type="text" name="cpf" placeholder="Digite seu CPF" required>     
                    </div>

                    <div class="input">
                        <label for="name"><strong>Nome</strong></label>
                        <input type="text" name="name" placeholder="Digite seu Nome" required>
                    </div>

                    <div class="input">
                        <label for="surname"><strong>Sobrenome</strong></label>
                        <input type="text" name="surname" placeholder="Digite seu Sobrenome" required>
                    </div>

                    <div class="input">
                        <label for="born">Data de Nascimento</label>
                        <input type="date" name="born">
                    </div>
                </div>               

                <div class="two-row">
                    <div class="input">
                        <label for="email"><strong>E-mail</strong></label>
                        <input type="email" name="email" placeholder="Digite seu E-mail" required>
                    </div>

                    <div class="input">
                        <label for="confirm-email"><strong>Confirmar E-mail</strong></label>
                        <input type="email" name="confirm-email" placeholder="Digite seu E-mail" required>
                    </div>
                </div>

                <div class="two-row">
                    <div class="input">
                        <label for="password"><strong>Senha</strong></label>
                        <input type="password" name="password" placeholder="Digite sua Senha" required>     
                    </div>
                    
                    <div class="input">
                        <label for="confirm-password"><strong>Confirmar Senha</strong></label>
                        <input type="password" name="confirm-password" placeholder="Confirme sua Senha" required>     
                    </div>
                </div>

                <div class="three-row">
                    <div class="input">
                        <label for="home-phone">Telefone Residencial</label>
                        <input type="text" name="home-phone">   
                    </div>
                    
                    <div class="input">
                        <label for="commercial-phone">Telefone Comercial</label>
                        <input type="text" name="commercial-phone">   
                    </div>

                    <div class="input">
                        <label for="cellphone">Celular</label>
                        <input type="text" name="cellphone">      
                    </div>    
                </div>
                            
                <button type="submit" class="button">Prosseguir</button>
            </form>
        </div>
    </div>
@endsection