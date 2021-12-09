<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- Meta --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- Fonts --}}
        <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;700&display=swap" rel="stylesheet">
        {{-- Styles --}}
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/global.css">
        <link rel="stylesheet" href="/components/button.css">
        {{-- Scripts --}}
        <script src="https://kit.fontawesome.com/cfaedefc96.js" crossorigin="anonymous"></script>
        {{-- Title --}}
        <title>@yield('title')</title>
    </head>
    <body class="antialiased">
        {{-- Navbar --}}
        <div>
            <header class="navbar">
                <div class="nav">
                    <div class="menu-left">
                        <a href="/" class="logo"><img src="/img/central_atendimento.png" alt="Logotipo"></a>
                        <ul>
                            <li><a href="#">Sobre</a></li>
                            <li><a href="/estatistica">Estatística</a></li>
                            <li><a href="/servicos">Serviço</a></li>
                            <li><a href="#">Chat</a></li>
                        </ul>
                    </div>
                    <div class="menu-right">
                        <ul>
                            <li><a href="/ocorrencia">Abrir Pedido</a></li>
                            <li><a href="/cadastro">Cadastrar</a></li>
                            <li><a href="#" class="button">Entrar</a></li>
                        </ul>
                    </div>
                </div>
            </header>
        </div>

        {{-- Content --}}
        @yield('portal')
        @yield('request')
        @yield('register')
        @yield('statistics')
        @yield('request-cpf')
        @yield('request-cnpj')
        @yield('request-final')
        @yield('request-modal')
        @yield('services')

        {{-- Footer --}}
        <footer class="white-content content">
            <div class="container footer">
                <div class="info">
                    <img src="/img/central_atendimento.png" alt="">
                    <p> Ligue para o número 156 ou entre em contato por meio do Chat. Para demais localidades e Região Metropolitana, disque (41) 3074-6456. A Central 156 de Curitiba funciona 24 horas, todos os dias da semana, inclusive feriados.
                    </p>
                </div>

                <div class="map">
                    <ul>
                        <p class="title">Mapa do Site</p>
                        <li><a href="/">Início</a></li>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="/estatistica">Estatística</a></li>
                        <li><a href="/servicos">Serviços</a></li>
                        <li><a href="#">Termos e Política de Privacidade</a></li>
                    </ul>
                </div>
                
                <div class="links">
                    <ul>
                        <p class="title">Links Úteis</p>
                        <li><a href="#">Horário de Ônibus</a></li>
                        <li><a href="#">Turismo</a></li>
                        <li><a href="#">Agenda Cultural</a></li>
                        <li><a href="#">Portal Setran</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>
