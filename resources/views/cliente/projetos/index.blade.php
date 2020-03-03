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
        </div>
    </div>
    <section class="section section-lg section-safe" id="material">
        <div class="container">
            <div class="row row-grid justify-content-between">

                <div class="col-md-5">
                    <img src="/cliente/images/aluno.jpeg" class="img-fluid floating">

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
                                        <h6>História: Temos a história da fundação da cidade de Boa vista,
                                            capital de Roraima, além de
                                            trazer forte aspectos culturais da nossa região e da cultura
                                            indígena.</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div class="icon icon-success mb-2">
                                        <i class="tim-icons icon-compass-05"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h6>Geografia: Conhecer a base onde foi construída a nossa cidade, suas
                                            formas de relevo,
                                            agricultura, biomas etc.</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div class="icon icon-success mb-2">
                                        <i class="tim-icons icon-molecule-40"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h6>Ciências: Estudar e conhecer a fauna e flora que rodeia nosso
                                            Estado, a importância do Rio
                                            Branco para a nossa capital, meios de preservar o meio ambiente etc.
                                        </h6>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div class="icon icon-success mb-2">
                                        <i class="tim-icons icon-book-bookmark"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h6>Português: O dialeto e a fonética antiga pode ser usada como base de
                                            debate sobre a língua
                                            portuguesa e suas constantes mudanças.</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div class="icon icon-success mb-2">
                                        <i class="tim-icons icon-image-02"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h6>Artes: Pode ser feito um estudo de de paisagens: O que mudou na Boa
                                            Vista de X anos atras
                                            comparada a hoje? Além de poder usar o jogo em si como referencia
                                            pois o mesmo foi feito a
                                            partir de documentos e imagens históricas.</h6>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{--planos de aula --}}

    <div class="cd-section" id="projects">
        <div class="projects-3">

            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center mb-5">
                        {{-- <h6 class="category text-muted">3º ANO ENSINO FUNDAMENTAL - HISTÓRIA</h6> --}}
                        <h2 class="title mt-0">Planos de Aula</h2>
                    </div>
                </div>
                <div class="space-50"></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-blog card-plain">
                            <div class="card-header">
                                <h2 class="title">História - Aula 1</h2>
                                {{-- aqui pode conter uma previa da quantidade de arquivos ou algo do genero --}}
                                <span class="badge badge-danger">VR</span>
                                <span class="badge badge-info">Leitura</span>
                            </div>
                            <div class="card-image">
                                <a href="javascript:;">
                                    <img class="img rounded img-raised" src="/cliente/images/aula01.png">
                                </a>
                            </div>
                            <div class="card-footer text-left">
                                <div class="author">
                                  <button class="btn btn-success btn-round btn-simple" data-toggle="modal" data-target="#myModal">
                                      <i class="tim-icons icon-single-copy-04"></i> Saiba Mais
                                    </button>
                                  <button class="btn btn-primary btn-round btn-simple" data-toggle="modal" data-target="#myModal2">
                                      <i class="tim-icons icon-single-copy-04"></i> Boa Leitura
                                    </button>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-blog card-plain">
                            <div class="card-header">
                                <h2 class="title">História - Aula 2</h2>
                                <span class="badge badge-success">Leitura</span>
                            </div>
                            <div class="card-image">
                                <a href="javascript:;">
                                    <img class="img rounded img-raised" src="/cliente/images/aula02.png">
                                </a>
                            </div>
                            <div class="card-footer text-left">
                                <div class="author">
                                    <a href="#" target=""> Estamos Trabalhando</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-50"></div>

            </div>
        </div>
    </div>



    {{--Galeria--}}
    <div class="team-1 row" id="galeria">
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
                                <img class="d-block" src="/cliente/images/forte_1830.png" alt="First slide">
                            </div>
                            <div class="col-md-4">
                                <div class="wrapper">

                                    <div class="description">

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
                                <img class="d-block" src="/cliente/images/capitao_forte.png" alt="First slide">
                            </div>
                            <div class="col-md-4">
                                <div class="wrapper">

                                    <div class="description">

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
                                <img class="d-block" src="/cliente/images/igreja.png" alt="First slide">
                            </div>
                            <div class="col-md-4">
                                <div class="wrapper">

                                    <div class="description">

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
                                <h1 class="">ORLA TAUMAN,
                                    BOA VISTA, 2019</h1>
                                <div class="category">
                                    <h4>Local onde ficava o Porto de Cimento
                                    </h4>
                                    {{-- <br>
                                  <strong>Experience:</strong> 7 years  --}}
                                </div>
                            </div>
                            <div class="col-md-8">
                                <img class="d-block" src="/cliente/images/orla.png" alt="First slide">
                            </div>
                            <div class="col-md-4">
                                <div class="wrapper">

                                    <div class="description">

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
                                <h1 class="">FAZENDA BOA VISTA, 1905</h1>
                                <div class="category">
                                    <h4>Sede da Fazenda Boa Vista, e Igreja Nossa Senhora do Carmo
                                    </h4>
                                    {{-- <br>
                                  <strong>Experience:</strong> 7 years  --}}
                                </div>
                            </div>
                            <div class="col-md-8">
                                <img class="d-block" src="/cliente/images/fazenda_1905.png" alt="First slide">
                            </div>
                            <div class="col-md-4">
                                <div class="wrapper">

                                    <div class="description">

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
    {{--Modals--}}
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header justify-content-center">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
              <h4 class="title title-up">História - Aula 1</h4>
            </div>
            <div class="modal-body">
              <p> Essa é a nossa primeira aula. Segue os links dos materiais necessários para melhor proveito! :)
              </p>

              <a href="/pdfs/historia/aula_1/Planodeaula1.pdf" target="_blank">
                Plano de Aula 1 <i class="tim-icons icon-cloud-download-93"></i>
              </a>
              <br>
              <a href="/pdfs/historia/aula_1/Planodeaula2.pdf" target="_blank">
                Plano de Aula 2 <i class="tim-icons icon-cloud-download-93"></i>
              </a>
              <br>
              <a href="/pdfs/historia/aula_1/GUIADEORIENTACOESBV-128.pdf" target="_blank">
                Guia de Orientaçôes BV128 <i class="tim-icons icon-cloud-download-93"></i>
              </a>
              <br>
              <a href="/pdfs/historia/aula_1/CanaimeVolume1.pdf" target="_blank">
                Canaime Volume 1 <i class="tim-icons icon-cloud-download-93"></i>
              </a>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default">Nice Button</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      <i class="tim-icons icon-simple-remove"></i>
                    </button>
                    <h4 class="title title-up">Boa Leitura!</h4>
                  </div>
                  <div class="modal-body">

                      <iframe src="https://cdn.flipsnack.com/widget/v2/widget.html?hash=fcfqom5nv" width="100%" height="200" seamless="seamless" scrolling="no" frameBorder="0" allowFullScreen>
                      </iframe>
                  </div>
                <div class="modal-footer">
                   <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
