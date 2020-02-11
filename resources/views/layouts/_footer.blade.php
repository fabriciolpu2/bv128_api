<!--footer section start-->
<footer class="footer-setion">
    <!--footer top start-->
    <div class="footer-top pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 mb-3 mb-lg-0">
                    <div data-aos="fade-right" class="footer-nav-wrap">
                        <img src="images/logo.png" alt="footer logo" width="120" class="img-fluid mb-3">
                        <p>
                            Atendimento de segunda a sexta, das 8h às 18h. Para clientes com contrato vigente, temos
                            atendimento 24 horas.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 ml-auto mb-6 mb-lg-0">
                    <div data-aos="fade-down" class="footer-nav-wrap">
                        <h5 class="mb-6">Contatos</h5>
                        <ul class="list-unstyled">
                            @foreach ($filiais as $filial)
                                <li class="mb-2"><span class="ti-arrow-circle-right mr-2"></span>
                                    {{$filial->nome}} |
                                    <a href="tel:+55{{$filial->contato_1}}"> {{$filial->contato_1}}</a> |
                                    <a href="mailto:{{$filial->email}}"> {{$filial->email}}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div data-aos="fade-left" class="footer-nav-wrap">
                        <h5 class="mb-3">Links rápidos</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <i class="ti-arrow-circle-right mr-2"></i>
                                <a href="#servicos">Soluções e Serviços</a>
                            </li>
                            <li class="mb-2">
                                <i class="ti-arrow-circle-right mr-2"></i>
                                <a href="#time">Especialistas</a>
                            </li>
                            <li class="mb-2">
                                <i class="ti-arrow-circle-right mr-2"></i>
                                <a href="#clients">Nossos clientes</a>
                            </li>
                            <li class="mb-2">
                                <i class="ti-arrow-circle-right mr-2"></i>
                                <a href="#zafaz">ZAFAZ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer top end-->

    <!--footer copyright start-->
    <div class="footer-bottom gray-light-bg pt-4 pb-4">
        <div class="container">
            <div class="row text-center text-md-left align-items-center">
                <div class="col-md-6 col-lg-5"><p class="text-md-left copyright-text pb-0 mb-0">Copyrights © {{config('app.anoSite')}}.
                    </p></div>
                {{-- <div class="col-md-6 col-lg-5"><p class="text-md-left copyright-text pb-0 mb-0">Copyrights © 2019. Developed by
                    <a href="#">Mim</a></p></div> --}}
                <div class="col-md-6 col-lg-7">
                    <ul class="social-list list-inline list-unstyled text-md-right">
                        <li class="list-inline-item"><a href="http://facebook.com/amplomed" target="_blank" title="Facebook"><span
                                class="ti-facebook"></span></a></li>
                        <li class="list-inline-item"><a href="http://twitter.com/amplomed" target="_blank" title="Twitter"><span
                                class="ti-twitter"></span></a></li>
                        <li class="list-inline-item"><a href="http://instagram.com/amplomed" target="_blank"
                                                        title="Instagram"><span class="ti-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--footer copyright end-->
</footer>
<!--footer section end-->
