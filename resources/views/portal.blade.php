@extends('layouts.template-portal')
@section('title', 'Portal 156 - Início')
@section('portal')
    <link rel="stylesheet" href="/css/first-page.css">
    <link rel="stylesheet" href="/components/cards.css">
    <link rel="stylesheet" href="/components/button.css">

    <script src="https://kit.fontawesome.com/cfaedefc96.js" crossorigin="anonymous"></script>

    <div class="yellow-content content">
        <div class="container first-content">
            <div class="text">
                <h1>Novo Portal 156</h1>

                <p>Reformulamos nosso portal, planejado para trazer a melhor experiência para o cidadão!</p>

                <button class="button">Veja Mais</button>
            </div>
        </div>

        <div class="container second-content">
            <input type="text" placeholder="O que você procura?" name="" id="">
            
            <h2>Principais Serviços</h2>
            
            <ul class="services">
                <li><a href="#"><i class="fas fa-tree"></i><br>Árvore</a></li>
                <li><a href="#"><i class="fas fa-virus"></i><br>Coronavírus<br>(Covid-19)</a></li>
                <li><a href="#"><i class="fas fa-paw"></i><br>Animais</a></li>
                <li><a href="#"><i class="fas fa-hand-holding-heart"></i><br>Disque<br>Solidariedade</a></li>
                <li><a href="#"><i class="fas fa-trash-alt"></i><br>Coleta</a></li>
                <li><a href="#"><i class="far fa-lightbulb"></i><br>Iluminação<br>Pública</a></li>
                <li><a href="#"><i class="fas fa-tractor"></i><br>Pavimentação</a></li>
                <li><a href="#"><i class="fas fa-car"></i><br>Trânsito</a></li>
                <li><a href="#"><i class="fas fa-car"></i><br>Trânsito</a></li>
            </ul>
        </div>
    </div>

    <!-- Third Content -->
    <div class="default-content content">
        <div class="container third-content">
            <div class="image">
                <img src="/img/appimage.png" alt="">
            </div>

            <div class="text">
                <h2>Baixe nosso Aplicativo</h2>
                <p>Com o aplicativo 156, você tem todos os serviços da Prefeitura na palma da mão. Desenvolvido para sistemas Android e iOS, oferece precisão nos registros graças à geolocalização e uso de inteligência artificial para reconhecimento de imagens. Os usuários do transporte coletivo ainda podem consultar saldos do cartão, verificar os horários das linhas, definir as melhores rotas de itinerários e acompanhar o deslocamento dos veículos em tempo real. </p>
                <div class="buttons">
                    <button class="button">
                        <i class="fab fa-google-play"></i>
                        Google Play
                    </button>
                    <button class="button">
                        <i class="fab fa-apple"></i>
                        App Store
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Fourth Content -->
    <div class="white-content content">
        <div class="container fourth-content">
            <h2>Como a prefeitura cuida dos pedidos:</h2>
            <div class="image">
                <p>video</p>
            </div>
            <!-- <video src=""></video> -->
        </div>
    </div>

    <!-- Fifth Content -->
    <div class="default-content content">
        <div class="container fifth-content">
            <h2>Resultados do nosso trabalho</h2>
            <div class="cards">
                <div class="card">
                    <i class="fas fa-phone-alt"></i>
                    <p class="title">41.231.747</p>
                    <p class="title">Atendimentos realizados</p>
                    <p>Atendimento telefônico, Chat, Internet e Aplicativo mobile desde 2002.</p>
                </div>

                <div class="card">
                    <i class="fas fa-info"></i>
                    <p class="title">24.292.422</p>
                    <p class="title">Informações repassadas</p>
                    <p>Com sua contribuição desde 2002.</p>
                </div>

                <div class="card">
                    <i class="fas fa-check"></i>
                    <p class="title">9.183.810</p>
                    <p class="title">Registro de serviço</p>
                    <p>Atendimentos aprovados pela população realizados pelo 156 desde 2002.</p>
                </div>

                <div class="card">
                    <i class="far fa-grin-alt"></i>
                    <p class="title">94,5%</p>
                    <p class="title">Média de satisfação</p>
                    <p>Atendimento telefônico, Chat, Internet e Aplicativo mobile desde 2002.</p>
                </div>
            </div>
            <button class="button">Mais Estatísticas</button>
        </div>
    </div>
@endsection
