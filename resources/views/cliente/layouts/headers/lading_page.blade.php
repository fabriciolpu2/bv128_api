<div class="header header-4">
    <div class="header-wrapper">
        <nav class="navbar navbar-expand-lg navbar-transparent">
            <div class="container">
                <div class="navbar-translate">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-header-4"
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
        <div class="page-header header-video header-filter">
            <div class="overlay"></div>
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="/videos/demo_new.mp4" type="video/mp4">
            </video>
            <div class="container text-center">
                <div class="video-text">
                    <h2 class="description">Venha participar da revolução na educação</h2>
                    <h1 class="title">Agora você pode estudar atraves da Realidade Virtual !</h1>
                    <br />
                    <a href="http://game.bv128.canaimestudio.com.br/" target="_blank"
                        class="btn btn-primary btn-round btn-lg mr-3 pulse">
                        <i class="tim-icons icon-controller"></i>
                    </a>
                    <span> Jogar Agora! </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--header section end-->