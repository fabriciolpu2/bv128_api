<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container-fluid">
            <!-- Logo container-->
            <div class="logo">
                <a href="{{ route('welcome') }}" class="logo">
                    <span class="logo-small"><img src="/admin/images/logo-canaime.png" alt="" height="26"></span>
                    <span class="logo-large"><img src="/admin/images/logo-canaime.png" alt="" height="26"></span>
                </a>
            </div>
            <!-- End Logo container-->
            <div class="menu-extras topbar-custom">

                <ul class="list-unstyled topbar-right-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            {{-- <img src="/images/d/users/avatar-1.jpg" alt="user" class="rounded-circle">  --}}
                            <span class="ml-1 pro-user-name">
                                {{ Auth::user()->name }}
                                <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                            <!-- item-->
                            <a href="{{ route('my.account.get') }}" class="dropdown-item notify-item">
                                <i class="fi-head"></i> <span>{{__('labels.MyAccount')}}</span>
                            </a>

                            <!-- item-->
                            <a href="{{ route('change-password') }}" class="dropdown-item notify-item">
                                <i class="fi-cog"></i> <span>{{__('labels.ChangePassword')}}</span>
                            </a>

                            <!-- item-->
                            <a href="{{ url('/admin/logout') }}" class="dropdown-item notify-item"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fi-power"></i> <span>{{__('labels.Logout')}}</span>
                            </a>

                            <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST"
                                style="display: none;">
                                {{ csrf_field() }}
                            </form>

                        </div>
                    </li>

                    <li class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>
                </ul>
            </div>
            <!-- end menu-extras -->

            <div class="clearfix"></div>

        </div>
        <!-- end container -->
    </div>
    <!-- end topbar-main -->

    <div class="navbar-custom bg-{{config('app.color') }}">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->

                <ul class="navigation-menu">
                    {{-- {{ set_active('turmas') }} --}}
                    <li class="has-submenu ">
                        <a href="{{route('minhas-turmas')}}">
                            <i class="mdi mdi-book"></i>Turmas
                        </a>

                    </li>
                    {{-- {{ set_active('aulas') }} --}}
                    <li class="has-submenu ">
                        <a href="{{route('alunos.index')}}">
                            <i class="mdi  mdi-account-multiple"></i>Alunos
                        </a>

                    </li>
                    {{-- {{ set_active('questionarios') }} --}}
                    <li class="has-submenu">
                        <a href="{{route('questionarios.index')}}">
                            <i class="mdi mdi-pencil-box"></i>Questionarios
                        </a>


                    </li>
                    {{-- {{ set_active('aulas') }} --}}
                    <li class="has-submenu ">
                        <a href="{{ route('aulas.index') }}">
                            <i class="mdi mdi-library"></i>Aulas
                        </a>


                    </li>
                    {{-- {{ set_active('usuarios*') }} --}}
                    @if(Auth::user()->hasRole(['desenvolvedor','administrador']))
                    <li class="pull-right has-submenu ">
                        <a href="{{ route('usuarios.index') }}">
                            <i class="mdi mdi-account-key"></i>Usu??rios
                        </a>
                    </li>
                    <li class="pull-right has-submenu ">
                        <a href="{{ route('eventos.index') }}">
                            <i class="mdi mdi-account-key"></i>Eventos Historicos
                        </a>
                    </li>
                    @endif

                </ul>
                <!-- End navigation menu -->
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->
    </div>
    <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->