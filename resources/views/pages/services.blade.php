@extends('layouts.template-portal')
@section('title', 'Serviços - Portal 156')
@section('services')
    <link rel="stylesheet" href="/components/container.css">
    <link rel="stylesheet" href="/components/service-cards.css">
    <link rel="stylesheet" href="/css/services.css">

    {{-- Title and Search --}}
    <div class="normal-container" id="search">
        <div class="main-container" id="first-content">
            <div class="search">
                <div class="title">
                    <h1>Busque pelos principais serviços para resolver seus problemas</h1>
                </div>
    
                <div class="box-search">
                    <form action="">
                        <div class="box">
                            <input type="text" placeholder="O que você precisa?">
                        </div>
                        <div class="find">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="normal-container" id="services">
        <div class="main-container" id="second-content">
            <div class="title">
                <h2>Principais serviços</h2>
            </div>

            <div class="services">
                <div class="three-row" id="first-card">
                    <div class="service-cards">
                        <div class="icon"><i class="fas fa-tree"></i></div>
                        <div class="title-service">
                            <div class="service-name">
                                <h4>Árvore</h4>
                            </div>

                            <div class="read-more">
                                <a href=""><i class="fas fa-plus"></i></a>
                            </div>
                        </div>

                        <div class="description">
                            <p>Serviço referente aos pedidos de manutenção de equipamentos do programa</p>
                        </div>
                    </div>

                    <div class="service-cards">
                        <div class="icon"><i class="fas fa-tree"></i></div>
                        <div class="title-service">
                            <div class="service-name">
                                <h4>Árvore</h4>
                            </div>

                            <div class="read-more">
                                <a href=""><i class="fas fa-plus"></i></a>
                            </div>
                        </div>

                        <div class="description">
                            <p>Serviço referente aos pedidos de manutenção de equipamentos do programa</p>
                        </div>
                    </div>

                    <div class="service-cards">
                        <div class="icon"><i class="fas fa-tree"></i></div>
                        <div class="title-service">
                            <div class="service-name">
                                <h4>Árvore</h4>
                            </div>

                            <div class="read-more">
                                <a href=""><i class="fas fa-plus"></i></a>
                            </div>
                        </div>

                        <div class="description">
                            <p>Serviço referente aos pedidos de manutenção de equipamentos do programa</p>
                        </div>
                    </div>
                </div>

                <div class="three-row" id="second-card">
                    <div class="service-cards">
                        <div class="icon"><i class="fas fa-tree"></i></div>
                        <div class="title-service">
                            <div class="service-name">
                                <h4>Árvore</h4>
                            </div>

                            <div class="read-more">
                                <a href=""><i class="fas fa-plus"></i></a>
                            </div>
                        </div>

                        <div class="description">
                            <p>Serviço referente aos pedidos de manutenção de equipamentos do programa</p>
                        </div>
                    </div>

                    <div class="service-cards">
                        <div class="icon"><i class="fas fa-tree"></i></div>
                        <div class="title-service">
                            <div class="service-name">
                                <h4>Árvore</h4>
                            </div>

                            <div class="read-more">
                                <a href=""><i class="fas fa-plus"></i></a>
                            </div>
                        </div>

                        <div class="description">
                            <p>Serviço referente aos pedidos de manutenção de equipamentos do programa</p>
                        </div>
                    </div>

                    <div class="service-cards">
                        <div class="icon"><i class="fas fa-tree"></i></div>
                        <div class="title-service">
                            <div class="service-name">
                                <h4>Árvore</h4>
                            </div>

                            <div class="read-more">
                                <a href=""><i class="fas fa-plus"></i></a>
                            </div>
                        </div>

                        <div class="description">
                            <p>Serviço referente aos pedidos de manutenção de equipamentos do programa</p>
                        </div>
                    </div>
                </div>

                <div class="three-row" id="third-card">
                    <div class="service-cards">
                        <div class="icon"><i class="fas fa-tree"></i></div>
                        <div class="title-service">
                            <div class="service-name">
                                <h4>Árvore</h4>
                            </div>

                            <div class="read-more">
                                <a href=""><i class="fas fa-plus"></i></a>
                            </div>
                        </div>

                        <div class="description">
                            <p>Serviço referente aos pedidos de manutenção de equipamentos do programa</p>
                        </div>
                    </div>

                    <div class="service-cards">
                        <div class="icon"><i class="fas fa-tree"></i></div>
                        <div class="title-service">
                            <div class="service-name">
                                <h4>Árvore</h4>
                            </div>

                            <div class="read-more">
                                <a href=""><i class="fas fa-plus"></i></a>
                            </div>
                        </div>

                        <div class="description">
                            <p>Serviço referente aos pedidos de manutenção de equipamentos do programa</p>
                        </div>
                    </div>

                    <div class="service-cards">
                        <div class="icon"><i class="fas fa-tree"></i></div>
                        <div class="title-service">
                            <div class="service-name">
                                <h4>Árvore</h4>
                            </div>

                            <div class="read-more">
                                <a href=""><i class="fas fa-plus"></i></a>
                            </div>
                        </div>

                        <div class="description">
                            <p>Serviço referente aos pedidos de manutenção de equipamentos do programa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection