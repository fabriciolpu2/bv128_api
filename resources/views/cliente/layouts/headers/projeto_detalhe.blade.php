<div class="header header-1">
    <nav class="navbar navbar-expand-lg bg-primary navbar-absolute">
        <div class="container">
            <div class="navbar-translate">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-header-1"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
                <a class="navbar-brand" href="{{route('home.cliente')}}">Canaimé Studio</a>
            </div>
            @include('cliente.layouts.headers._bar')
        </div>
    </nav>
    <div class="page-header header-filter">
        <div class="page-header-image"
            style="background-image: url('/cliente/images/header_projeto_bv_128.png');">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-7 mr-auto text-left mt-5">
                    <h6 class="category">O game que conta a historia de Roraima</h6>
                    <h1 class="title">BOA VISTA 128 VR</h1>
                    <br>
                    <div class="buttons">
                        <a href="http://game.bv128.canaimestudio.com.br/" target="_blank" class="btn btn-primary btn-round btn-lg mr-3 pulse">
                            <i class="tim-icons icon-controller"></i>
                        </a>
                        <span> Jogar Agora! </span>
                    </div>
                </div>
                {{-- <div class="col-lg-7 col-md-12 ml-auto mt-5">
                    <div class="iframe-container">
                        <img src="https://lh4.googleusercontent.com/bPkwGRc6ly-XwGSz0fwSuaC3yVV8FLDGL5ezlzDjeH-zwBUZP6QyTE72UCL5E13cJIqyS2qaYprdLb4bTc0MA0Sr7Qq3y8ZjtCmMP5gHawWn_2Wn3X8=w572" alt="gif">
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>