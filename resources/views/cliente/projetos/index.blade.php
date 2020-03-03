@extends('cliente.layouts.app')

@section('content')

@include('cliente.layouts.headers.projeto_detalhe')

<div class="features-4">
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
                            <h2 class="title">
                                Um pouco sobre o BV128 VR
                            </h2>
                            <h4>
                                <p>
                                    <span>
                                        É um jogo em realidade virtual desenvolvido para ser usado como RECURSO
                                        EDUCACIONAL
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
                                    O BV128 fará uma viagem ao tempo, levando os alunos a vivenciarem novas experiências
                                    ,
                                    conhecer
                                    e interagir com prédios e personagens épicos de nosso município de outra época, além
                                    de
                                    participar ativamente dos acontecimentos históricos de Boa Vista, através de
                                    missões.

                                </p>
                            </h4>

                        </div>
                    </div>
                </div>
            </div>

            <section class="section section-lg section-safe" id="material">
                <div class="container">
                  <div class="row row-grid justify-content-between">
                    <div class="col-md-5">
                      <img src="/cliente/images/card_board.jpg" class="img-fluid floating">
                      <div class="card card-stats bg-danger">
                        <div class="card-body">
                          <div class="justify-content-center">
                            <div class="numbers">
                              <p class="card-title">100%</p>
                              <p class="card-category text-white">Safe</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card card-stats bg-info">
                        <div class="card-body">
                          <div class="justify-content-center">
                            <div class="numbers">
                              <p class="card-title">573 K</p>
                              <p class="card-category text-white">Satisfied customers</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card card-stats bg-default">
                        <div class="card-body">
                          <div class="justify-content-center">
                            <div class="numbers">
                              <p class="card-title">10 425</p>
                              <p class="card-category text-white">Business</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="px-md-5">
                        <hr class="line-success">
                        <h3>Manual de Utilização</h3>
                        <p>Como aproveitar todos os recursos do BV128 VR na Sala de Aula</p>
                        <ul class="list-unstyled mt-5">
                          <li class="py-2">
                            <div class="d-flex align-items-center">
                              <div class="icon icon-success mb-2">
                                <i class="tim-icons icon-world"></i>
                              </div>
                              <div class="ml-3">
                                <h6>História: Temos a história da fundação da cidade de Boa vista, capital de Roraima, além de trazer forte aspectos culturais da nossa região e da cultura indígena.</h6>
                              </div>
                            </div>
                          </li>
                          <li class="py-2">
                            <div class="d-flex align-items-center">
                              <div class="icon icon-success mb-2">
                                <i class="tim-icons icon-compass-05"></i>
                              </div>
                              <div class="ml-3">
                                <h6>Geografia: Conhecer a base onde foi construída a nossa cidade, suas formas de relevo, agricultura, biomas etc.</h6>
                              </div>
                            </div>
                          </li>
                          <li class="py-2">
                            <div class="d-flex align-items-center">
                              <div class="icon icon-success mb-2">
                                <i class="tim-icons icon-molecule-40"></i>
                              </div>
                              <div class="ml-3">
                                <h6>Ciências: Estudar e conhecer a fauna e flora que rodeia nosso Estado, a importância do Rio Branco para a nossa capital, meios de preservar o meio ambiente etc. </h6>
                              </div>
                            </div>
                          </li>
                          <li class="py-2">
                            <div class="d-flex align-items-center">
                              <div class="icon icon-success mb-2">
                                <i class="tim-icons icon-book-bookmark"></i>
                              </div>
                              <div class="ml-3">
                                <h6>Português: O dialeto e a fonética antiga pode ser usada como base de debate sobre a língua portuguesa e suas constantes mudanças.</h6>
                              </div>
                            </div>
                          </li>
                          <li class="py-2">
                            <div class="d-flex align-items-center">
                              <div class="icon icon-success mb-2">
                                <i class="tim-icons icon-image-02"></i>
                              </div>
                              <div class="ml-3">
                                <h6>Artes: Pode ser feito um estudo de de paisagens: O que mudou na Boa Vista de X anos atras comparada a hoje? Além de poder usar o jogo em si como referencia pois o mesmo foi feito a partir de documentos e imagens históricas.</h6>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </section>


            {{--Galeria--}}
            <div class="testimonials-1 section-image" id="galeria">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                      <h2 class="title">Galeria</h2>
                    </div>
                  </div>
                  <div id="carousel-testimonials" class="carousel slide carousel-team">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-5 mr-auto">
                              <div class="space-100"></div>
                              <h3 class="card-title"> Cap. Inácio Lopes de Magalhães </h3>
                              <h3 class="text-warning">• • •</h3>
                              <h4 class="description">
                                Take up one idea. Make that one idea your life - think of it, dream of it, live on that idea. Let the brain, muscles, nerves, every part of your body, be full of that idea, and just leave every other idea alone. This is the way to success. A single rose can be my garden... a single friend, my world.
                              </h4>
                              {{-- <a href="javascript:void(0)" class="btn btn-warning">Read more</a> --}}
                            </div>
                            <div class="col-md-6 ml-auto">
                              <img class="d-block" src="/cliente/images/capitao_forte.png" alt="Second slide">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-5 mr-auto">
                              <div class="space-100"></div>
                              <h3 class="card-title"> Forte São Joaquim, 1830 </h3>
                              <h3 class="text-success">• • •</h3>
                              <h4 class="description">
                                Take up one idea. Make that one idea your life - think of it, dream of it, live on that idea. Let the brain, muscles, nerves, every part of your body, be full of that idea, and just leave every other idea alone. This is the way to success. A single rose can be my garden... a single friend, my world.
                              </h4>

                            </div>
                            <div class="col-md-6 ml-auto">
                              <img class="d-block" src="/cliente/images/forte_1830.png" alt="First slide">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-5 mr-auto">
                              <div class="space-100"></div>
                              <h3 class="card-title"> Fazenda Boa Vista, 1905 </h3>
                              <h3 class="text-success">• • •</h3>
                              <h4 class="description">
                                Sede da Fazenda Boa Vista, e Igreja Nossa Senhora do Carmo
                                </h4>

                            </div>
                            <div class="col-md-6 ml-auto">
                              <img class="d-block" src="/cliente/images/fazenda_1905.png" alt="First slide">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-5 mr-auto">
                              <div class="space-100"></div>
                              <h3 class="card-title"> Igreja Nossa Sª Do Carmo, 1924 </h3>
                              <h3 class="text-success">• • •</h3>
                              <h4 class="description">
                                Take up one idea. Make that one idea your life - think of it, dream of it, live on that idea. Let the brain, muscles, nerves, every part of your body, be full of that idea, and just leave every other idea alone. This is the way to success. A single rose can be my garden... a single friend, my world.
                              </h4>

                            </div>
                            <div class="col-md-6 ml-auto">
                              <img class="d-block" src="/cliente/images/igreja.png" alt="First slide">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-5 mr-auto">
                              <div class="space-100"></div>
                              <h3 class="card-title"> Orla Taumanan, 2019 </h3>
                              <h3 class="text-success">• • •</h3>
                              <h4 class="description">
                                Local onde ficava o Porto de Cimento
                              </h4>

                            </div>
                            <div class="col-md-6 ml-auto">
                              <img class="d-block" src="/cliente/images/orla.png" alt="First slide">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-testimonials" role="button" data-slide="prev">
                      <i class="tim-icons icon-minimal-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-testimonials" role="button" data-slide="next">
                      <i class="tim-icons icon-minimal-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
              </div>


        </div>
    </div>
</div>



@endsection
