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
        @role('professor')
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('aulas.index') }}">
                Aulas
            </a>
        </li>
        @else
        <li class="nav-item active">
            <a class="nav-link" href="projetos/bv-128">
                Aulas
            </a>
        </li>
        @endrole
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
        @role('aluno')
        <li class="nav-item active">
            <a class="nav-link" href="{{route('projeto.bv-128')}}">
                Aulas
            </a>
        </li>
        @else
        <li class="nav-item active">
            <a class="nav-link" href="{{route('login')}}">
                EAD
            </a>
        </li>
        @endrole

        <li class="nav-item">
            <a class="nav-link" href="#sobre">
                Sobre
            </a>
        </li>


        @endif
        <li class="nav-item">
            <a class="nav-link" href="{{route('contato')}}">
                Contato
            </a>
        </li>
        @if(Auth::check())
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="false" aria-expanded="false">
                {{-- <img src="/images/d/users/avatar-1.jpg" alt="user" class="rounded-circle">  --}}
                <span class="ml-1 pro-user-name">
                    {{ Auth::user()->name }}
                    <i class="mdi mdi-chevron-down"></i>
                </span>
            </a>
            <div class="dropdown-menu  profile-dropdown ">

                <!-- item-->
                <a href="{{ url('/admin/logout') }}" class="dropdown-item notify-item"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fi-power"></i> <span>{{__('labels.Logout')}}</span>
                </a>

                <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>

            </div>
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