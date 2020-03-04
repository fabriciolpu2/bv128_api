<div class="collapse navbar-collapse " id="example-header-4">
    <div class="navbar-collapse-header">
        <div class="row">
            <div class="col-6 collapse-brand">
                @if (!(Auth::user()))
                    <a href="{{route('home.cliente')}}">
                        Canaimé
                        <span> Studio </span>
                    </a>
                @else
                    <a href="{{route('projeto.bv-128')}}">
                        Canaimé
                        <span> Studio </span>
                    </a>
                @endif
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
                <a class="nav-link" href="{{route('projeto.bv-128')}}">
                    BV128
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#material">
                    Manual de utilização
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#plano-aulas">
                    Planos de Aula
                </a>
            </li>
            {{-- <li class="nav-item active">
                <a class="nav-link" href="{{route('home.cliente')}}">
                    BNCC
                </a>
            </li> --}}
            {{-- <li class="nav-item active">
                <a class="nav-link" href="#galeria">
                    Galeria
                </a>
            </li> --}}
            {{-- <li class="nav-item active">
                <a class="nav-link" href="{{route('home.cliente')}}">
                    Calendário
                </a>
            </li> --}}

            <li class="nav-item">

                <a href="{{ url('/admin/logout') }}" class="nav-link"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Sair
                </a>
                <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>

        @else
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home.cliente')}}">
                    Home
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#projetos">
                    Projetos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">
                    EAD
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="#sobre">
                    Sobre
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#contato">
                    Contato
                </a>
            </li>

        @endif


    </ul>
    @if (!(Auth::user()))

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
    @endif
</div>
