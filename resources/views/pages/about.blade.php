@extends('layouts.template-portal')
@section('title', 'Sobre - Portal 156')
@section('about')
    <link rel="stylesheet" href="/components/container.css">
    <link rel="stylesheet" href="/css/about.css">

    <div class="normal-container" id="one">
        <div class="main-container">
            <div class="content-one">
                <div class="text">
                    <h2>A Central 156</h2>
                    <p>É o canal de comunicação entre você e a Prefeitura de Curitiba. Por meio dele, todos os curitibanos podem solicitar informações, serviços municipais e outros atendimentos de maneira segura, eficiente e com qualidade. A Central é administrada diretamente pela Secretaria do Governo Municipal.</p>
                </div>

                <div class="image">
                    <img src="/img/workspace.svg" alt="">
                </div>
            </div>
            
            <div class="content-two">
                <h2>Prática e moderna.</h2>
                <p>Todas as secretarias e órgãos municipais atuam de maneira integrada pelo sistema. Além do telefone, onde você pode solicitar qualquer informação e serviço municipal, também existem os canais digitais que podem ser facilmente acessados, como o chat, o portal e o aplicativo mobile. Dessa forma, garantimos a democratização e a facilidade de acesso aos serviços públicos municipais, o, permitindo uma gestão participativa.</p>
            </div>
        </div>
    </div>

    <div class="normal-container" id="two">
        <div class="main-container">
            <div class="second-content">
                <div class="cards">
                    <div class="two-row">
                        <div class="card">
                            <div class="icon"><span class="iconify" data-icon="fa-solid:phone"></span></i></div>
                            <h3>Telefone</h3>
                            <p>Canal de atendimento via telefone (156)</p>
                        </div>
                        <div class="card">
                            <div class="icon"><span class="iconify" data-icon="mdi:tablet-cellphone"></span></div>
                            <h3>Internet</h3>
                            <p>Canal de atendimento via portal website</p>
                        </div>
                    </div>

                    <div class="two-row">
                        <div class="card">
                            <div class="icon"><span class="iconify" data-icon="grommet-icons:chat-option"></span></div>
                            <h3>Chat</h3>
                            <p>Canal de atendimento via chat on-line</p>
                        </div>
                        <div class="card">
                            <div class="icon"><span class="iconify" data-icon="mdi:cellphone"></span></div>
                            <h3>Aplicativo</h3>
                            <p>Canal de atendimento via Aplicativo</p>
                        </div>
                    </div>
                </div>

                <div class="text">
                    <h2>Todos os cidadãos podem fazer o uso da Central 156.</h2>
                    <p>Além do telefone, o serviço pode ser acessado pelo portal e o chat de atendimento on-line. Por esses três meios, o cidadão pode solicitar qualquer informação e serviço pertinente ao âmbito administrativo municipal. A democratização e a facilidade de acesso aos serviços públicos municipais, o maior conhecimento das ações e dos serviços públicos e a maior qualidade no atendimento são os principais benefícios proporcionados pelas utilizações desses canais de comunicação com a Prefeitura de Curitiba.</p>
                </div>
            </div>
        </div>
    </div>
@endsection