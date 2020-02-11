@extends('layouts.app')

@section('content')
<!--hero section start-->
{{-- <section class="hero-section background-img ptb-100"
    style="background: url('images/hero-bg-0.jpg')no-repeat center center / cover"> --}}
<section class="hero-section background-img ptb-100" id="topo">
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" >
        <source src="videos/demo.mp4" type="video/mp4">
    </video>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="hero-content-left text-white text-center mt-5 ptb-100">
                    <h1 class="text-white text-uppercase">Somos Especialistas</h1>
                    <p class="lead text-uppercase">Em <span class="text-black font-weight-800">engenharia clínica</span>
                        & <span class="text-black font-weight-800">física médica</span></p>

                    <a href="{{ route('contato') }}" class="btn solid-btn">Contate-nos</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--hero section end-->

<section class="our-services-section ptb-100" id="servicos">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="headline section-heading text-center mb-5">
                    <h2>Soluções e Serviços</h2>
                    <p class="lead">Desde <span class="color-secondary">2002</span> fazemos o melhor para os nossos
                        clientes em:</p>
                </div>
            </div>
        </div>
        <div id="trigger1" class="row no-gutters">
            @foreach ($servicos as $servico)
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div data-aos="fade-up"
                    class="headline single-services single-feature-hover gray-light-bg single-feature text-center p-5 h-100">
                    <span
                        class="{{isset($servico->icon) ? $servico->icon : 'ti-check' }} icon-color-0 icon rounded"></span>
                    <div class="feature-conten {{$servico->destaque ? 'color-secondary' : '' }}">
                        @if (!$servico->destaque)
                        <h5 class="mb-2">{{$servico->titulo}}</h5>
                        @else
                        <p>{{$servico->titulo}}</p>
                        @endif

                        @isset($servico->subServicos)
                        <small>
                            <ul>
                                @foreach ($servico->subServicos as $sub)
                                <li><i class="ti-check"></i> {{$sub->titulo}}</li>
                                @endforeach

                            </ul>
                        </small>
                        @endisset

                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<section class="team-member-section gray-light-bg ptb-100" id="time">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10">
                <div data-aos="fade-up" class="headline2 section-heading text-center mb-5">
                    <h2>Equipe de Especialistas</h2>
                    <p class="lead">
                        Especialistas em Engenharia Clínica e Física Médica, manutenção preventiva e corretiva
                        de equipamentos médico-hospitalares, assim como locação e venda de equipamentos de
                        diagnóstico por imagem, como tomografia, Arco Cirúrgico, Raios-X, Ultrassonografia,
                        Mamografia, etc.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="trigger2" class="col-md-4">
                <div data-aos="fade-up" class="headline2 single-team-member rounded-1 position-relative">
                    <div class="team-image">
                        <img src="images/team-1.jpg" alt="Team Members" class="img-fluid rounded-1">
                    </div>
                    <div
                        class="team-info text-white rounded-1 d-flex flex-column align-items-center justify-content-center">

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div data-aos="fade-up" class="headline2 single-team-member rounded-1 position-relative">
                    <div class="team-image">
                        <img src="images/team-2.jpg" alt="Team Members" class="img-fluid rounded-1">
                    </div>
                    <div
                        class="team-info text-white rounded-1 d-flex flex-column align-items-center justify-content-center">

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div data-aos="fade-up" class="headline2 single-team-member rounded-1 position-relative">
                    <div class="team-image">
                        <img src="images/team-3.jpg" alt="Team Members" class="img-fluid rounded-1">
                    </div>
                    <div
                        class="team-info text-white rounded-1 d-flex flex-column align-items-center justify-content-center">

                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-lg-10 col-md-10">
                <div data-aos="fade-up" class="headline2 section-heading text-center mb-5">
                    <p class="lead">
                        Nossa equipe está sempre em aperfeiçoamento, participando de congressos, feiras, treinamentos
                        e simpósios nos eventos relacionados à área médica e pronta para atender a crescente demanda
                        do mercado.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--client section start-->
<section class="client-section ptb-100" id="clients">
    <div class="container">
        <!--clients logo start-->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div data-aos="fade-up" class="headline3 section-heading text-center mb-5">
                    <h2>Nossos Clientes</h2>
                    <p class="lead">
                        Clientes que conhecem a seriedade e o compromisso de quem possui experiência
                        no seguimento Médico-hospitalar.
                    </p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-12">
                <div id="trigger3" class="headline3 owl-carousel owl-theme clients-carousel dot-indicator">
                    @foreach ($clientes as $cliente)

                    @if ($cliente->getFirstMediaUrl('images') != null)
                    <div class="item single-client">
                        <img src="{{$cliente->getFirstMediaUrl('images')}}" alt="client logo" class="client-img">
                    </div>
                    @endif

                    @endforeach

                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-lg-10 col-md-10">
                <div data-aos="fade-up" class="headline3 section-heading text-center mb-5">
                    <p class="lead">
                        <span class="color-secondary">Dedique-se no que você é especialista.</span> No mais, somos
                        especialistas em fazer por você.
                    </p>

                </div>
            </div>
        </div>
        <!--clients logo end-->
    </div>
</section>
<!--client section start-->

<section class="about-us imageblock-section switchable switchable-content gray-light-bg ptb-100" id="zafaz">
    <div data-aos="fade-left" class="imageblock-section-img col-lg-5 col-md-5">
        <div class="background-image-holder"
            style="background: url('images/logo-zafaz.jpg')no-repeat center center / cover; opacity: 1; position:absolute;"></div>
    </div>
    <div class="container">
        <div id="trigger4" class="row align-items-center justify-content-between">
            <div class="col-md-6">
                <div class="about-content-left">
                    <h2 class="headline4" data-aos="fade-up">{{$zafaz->titulo}}</h2>
                    <p class="headline4" data-aos="fade-up" class="lead">
                        {{$zafaz->descricao}}
                    </p>

                    <div class="row">
                        @foreach ($zafaz->subServicos as $sub)
                        <div class="col single-feature mb-4">
                            <div data-aos="fade-up" class="headline4 d-flex align-items-center mb-2">
                                <span class="{{isset($sub->icon) ? $sub->icon : 'ti-check' }} rounded mr-3 icon icon-color-3"></span>
                                <h5 class="mb-0">{{$sub->titulo}}</h5>
                            </div>
                            <p data-aos="fade-up" class="headline4">
                                {{$sub->descricao}}
                            </p>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
