@extends('layouts.template-portal')
@section('title', 'Estatísticas - Portal 156')
@section('statistics')

    <link rel="stylesheet" href="/css/statistics.css">

    <div class="yellow-content content">
        <div class="container first-content">
            <div class="statistic-one">
                <div class="text">
                    <h1>Estatísticas e Indicadores</h1>
                    <h3>Descubra a avaliação da qualidade no atendimento ao cidadão do Portal 156 e serviços da Prefeitura!</h3>
                </div>
    
                <div class="img">
                    <img src="/img/analytics.svg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="default-content content">
        <div class="container second-content">
            <div class="statistic-two">
                <div class="img-text">
                    <div class="text">
                        <h1>Dezembro<br>2021</h1>
                    </div>

                    <div class="image">
                        <img src="/img/pie-graph.png" alt="">
                    </div>
                </div>

                <div class="cards">
                    <div class="two-cards">
                        <div class="card-one">
                            <h3>Tipo de serviço</h3>
                            <h4>Números</h4>
                            <p>Texto</p>
                        </div>
    
                        <div class="card-two">
                            <h3>Tipo de serviço</h3>
                            <h4>Números</h4>
                            <p>Texto</p>
                        </div>
                    </div>

                    <div class="two-cards">
                        <div class="card-three">
                            <h3>Tipo de serviço</h3>
                            <h4>Números</h4>
                            <p>Texto</p>
                        </div>
    
                        <div class="card-four">
                            <h3>Tipo de serviço</h3>
                            <h4>Números</h4>
                            <p>Texto</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection