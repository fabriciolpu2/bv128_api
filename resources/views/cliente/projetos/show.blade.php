@extends('layouts.app')

@section('content')

@include('cliente.layouts.headers.projeto_detalhe')

<div class="container">
    <div class="row">

        {{-- BREVE DESCRICAO --}}

        <div class="card card-blog card-plain blog-horizontal">
            <div class="row">
                {{-- <div class="col-lg-4">
                    <div class="card-image">
                        <a href="javascript:;">
                            <img class="img rounded"
                                src="https://lh4.googleusercontent.com/bPkwGRc6ly-XwGSz0fwSuaC3yVV8FLDGL5ezlzDjeH-zwBUZP6QyTE72UCL5E13cJIqyS2qaYprdLb4bTc0MA0Sr7Qq3y8ZjtCmMP5gHawWn_2Wn3X8=w572">
                        </a>
                    </div>
                </div> --}}
                <div class="col-lg-10">
                    <div class="card-body">
                        <h3 class="card-title">
                            <a href="javascript:;">Um pouco sobre o BV128 VR</a>
                        </h3>
                        <h4>
                            <p>
                                <span>
                                    É um jogo em realidade virtual desenvolvido para ser usado como RECURSO EDUCACIONAL
                                    e
                                    DIDÁTICO.
                                    Assim, auxiliando o professor no ensino da História de Boa Vista, de uma maneira
                                    mais
                                    interativa
                                    e participativa, que desperte o interesse do aluno pela disciplina de maneira
                                    inovadora
                                    e
                                    divertida.
                                </span>
                            </p>
                            <br>
                            <p>
                                O BV128 fará uma viagem ao tempo, levando os alunos a vivenciarem novas experiências ,
                                conhecer
                                e interagir com prédios e personagens épicos de nosso município de outra época, além de
                                participar ativamente dos acontecimentos históricos de Boa Vista, através de missões.

                            </p>
                        </h4>
                        {{-- <a href="javascript:;"> Read More </a> --}}
                        {{-- <div class="author">
                        <img src="assets/img/julie.jpg" alt="..." class="avatar img-raised">
                        <div class="text">
                            <span class="name">Tom Hanks</span>
                            <div class="meta">Drawn on 23 Jan</div>
                        </div>
                    </div> --}}
                    </div>
                </div>
            </div>
        </div>


        {{-- CAROUSEL DE IMAGENS DO GAME --}}

        <div class="team-1 row">
            <div id="carouselExampleControls" class="carousel slide carousel-team">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <h1 class="">FORTE SÃO JOAQUIM, 1830</h1>
                                    <div class="category">
                                        <h4>Área interna do Forte</h4>
                                        {{-- <br>
                                        <strong>Experience:</strong> 5 years --}}
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <img class="d-block"
                                        src="https://lh4.googleusercontent.com/bPkwGRc6ly-XwGSz0fwSuaC3yVV8FLDGL5ezlzDjeH-zwBUZP6QyTE72UCL5E13cJIqyS2qaYprdLb4bTc0MA0Sr7Qq3y8ZjtCmMP5gHawWn_2Wn3X8=w572"
                                        alt="First slide">
                                </div>
                                <div class="col-md-4">
                                    <div class="wrapper">

                                        <div class="description">
                                            {{-- Artist is a term applied to a person who engages in an activity deemed to be
                                            an
                                            art. An artist also may be defined unofficially as "a person who expresses
                                            him-
                                            or herself through a medium". He is a descriptive term applied to a person
                                            who
                                            engages in an activity deemed to be an art. An artist also may be defined
                                            unofficially as "a person who expresses him- or herself through a medium". --}}
                                        </div>
                                        {{-- <div class="footer">
                                            <a href="javascript:;" class="btn btn-icon btn-twitter btn-round"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="javascript:;" class="btn btn-icon btn-facebook btn-round"><i
                                                    class="fab fa-facebook-square"></i></a>
                                            <a href="javascript:;" class="btn btn-icon btn-dribbble btn-round"><i
                                                    class="fab fa-dribbble"></i></a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <h1 class="">FORTE SÃO JOAQUIM, 1830</h1>
                                    <div class="category">
                                        <h4> Cap. Inácio Lopes de Magalhães</h4>
                                        {{-- <br> --}}
                                        {{-- <strong>Experience:</strong> 1 year --}}
                                    </div>

                                </div>
                                <div class="col-md-8">
                                    <img class="d-block"
                                        src="https://lh4.googleusercontent.com/iQvJH-cLaLi4pv1FNus_MDV0CgXa6QWvWRxj6ArFle9y-NvAfdA3y8hjVI1W4Kg-yN73x6-784BVJ7iuMw0Vsjbp-tMuoIsyR5cCyccu-JhmT4fFVg=w572"
                                        alt="First slide">
                                </div>
                                <div class="col-md-4">
                                    <div class="wrapper">

                                        <div class="description">
                                            {{-- Artist is a term applied to a person who engages in an activity deemed to be
                                            an
                                            art. An artist also may be defined unofficially as "a person who expresses
                                            him-
                                            or herself through a medium". He is a descriptive term applied to a person
                                            who
                                            engages in an activity deemed to be an art. An artist also may be defined
                                            unofficially as "a person who expresses him- or herself through a medium". --}}
                                        </div>
                                        {{-- <div class="footer">
                                            <a href="javascript:;" class="btn btn-icon btn-twitter btn-round"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="javascript:;" class="btn btn-icon btn-facebook btn-round"><i
                                                    class="fab fa-facebook-square"></i></a>
                                            <a href="javascript:;" class="btn btn-icon btn-dribbble btn-round"><i
                                                    class="fab fa-dribbble"></i></a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <h1 class="">IGREJA NOSSA Sª DO CARMO, 1924</h1>
                                    <div class="category">
                                        <h4>Igreja Matriz N. Senhora do Carmo, durante a construção da torre do sino
                                        </h4>
                                        {{-- <br>
                                        <strong>Experience:</strong> 7 years  --}}
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <img class="d-block"
                                        src="https://lh4.googleusercontent.com/tDmFeT751OJHmf4AphUeWZdEUqzfmgq6ubtUmgvTAWEdzJcObgDZjsC6yOSF31jWdpK36uNNb-X2JmIrvZEgPbeOPLcNWHrsQzizrXa-FTnvzkV1RcI=w371"
                                        alt="First slide">
                                </div>
                                <div class="col-md-4">
                                    <div class="wrapper">

                                        <div class="description">
                                            {{-- Artist is a term applied to a person who engages in an activity deemed to be
                                            an
                                            art. An artist also may be defined unofficially as "a person who expresses
                                            him-
                                            or herself through a medium". He is a descriptive term applied to a person
                                            who
                                            engages in an activity deemed to be an art. An artist also may be defined
                                            unofficially as "a person who expresses him- or herself through a medium". --}}
                                        </div>
                                        {{-- <div class="footer">
                                            <a href="javascript:;" class="btn btn-icon btn-twitter btn-round"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="javascript:;" class="btn btn-icon btn-facebook btn-round"><i
                                                    class="fab fa-facebook-square"></i></a>
                                            <a href="javascript:;" class="btn btn-icon btn-dribbble btn-round"><i
                                                    class="fab fa-dribbble"></i></a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <i class="tim-icons icon-minimal-left"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <i class="tim-icons icon-minimal-right"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>



<br>


@endsection