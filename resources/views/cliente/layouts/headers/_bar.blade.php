<div class="collapse navbar-collapse" id="example-header-4">
    <div class="navbar-collapse-header">
        <div class="row">
            <div class="col-6 collapse-brand">
                <a href="{{route('home.cliente')}}">
                    Canaimé
                    <span> Studio </span>
                </a>
            </div>
            <div class="col-6 collapse-close text-right">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#example-header-4"
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
            </div>
        </div>
    </div>
    <ul class="navbar-nav mx-auto">
        @if(Auth::user() && Auth::user()->hasRole('professor'))
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home.cliente')}}">
                    BV128
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home.cliente')}}">
                    Manuel de utilização
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home.cliente')}}">
                    Planos de Aula
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home.cliente')}}">
                    BNCC
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home.cliente')}}">
                    Galeria
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home.cliente')}}">
                    Calendário
                </a>
            </li>

        @else
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home.cliente')}}">
                    Home
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                    Projetos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.login')}}">
                    EAD
                </a>
            </li>

        @endif
        <li class="nav-item">
            <a class="nav-link" href="javascript:;">
                Sobre
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="javascript:;">
                Contato
            </a>
        </li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fab fa-twitter"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fab fa-facebook-square"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fab fa-instagram"></i>
            </a>
        </li>
    </ul>
</div>
