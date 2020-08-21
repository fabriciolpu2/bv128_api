@extends('admin.layouts.dashboard.app')

@section('content')

<<<<<<< HEAD
@include('cliente.layouts.headers.aulas')

<div class="projects-3">
    <div class="container">
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>matricula</th>
                        <th>nome</th>
                        <th>pontuação</th>
                        <th>Missões concluidas</th>
                        <th>Escola</th>
                        <th>Turma</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alunos as $aluno)
                    <tr>
                        <td>{{$aluno->matricula}}</td>
                        <td>{{$aluno->nome}}</td>
                        <td>{{$aluno->pontuacao}}</td>
                        <td>{{$aluno->historico->missoes_concluidas}}</td>
                        <td>{{$aluno->turma->escola->nome}}</td>
                        <td>{{$aluno->turma->nome}}</td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
            {{-- {{ $alunos->links() }} --}}
=======
<div class="row">
    <div class="col-lg-5 col-md-7 mr-auto text-left mt-5">
        <h1 class="title">Lista de Alunos</h1>
        <h6 class="category">Aqui está a lista de todos os alunos cadastrados</h6>
        <br>

    </div>
</div>


<div class="row text-center m-t-50">
    <div class="col-lg-12">
        <div class="card-box">
            <h4 class="header-title mb-4">
                Alunos
                ({{ $alunos->total()}})
            </h4>
            {{-- <a href="{{ route('usuarios.create') }}" class="pull-right btn btn-purple w-md waves-effect waves-light
            mb-4">
            <i class="mdi mdi-plus-circle"></i>
            Novo usuário
            </a> --}}
            <div class="toolbar">
                <!--        Here you can write extra buttons/actions for the toolbar              -->
                <div class="text-left ml-50 mb-20">
                    <h5>Exibindo {{ $alunos->firstItem() }} até {{ $alunos->lastItem()}} de {{ $alunos->total() }}
                        alunos</h5>
                </div>
            </div>
            @if ($alunos->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover table-centered m-0">

                    <thead>
                        <tr>
                            <th><i class="fa fa-user"></i> Matrícula</th>
                            <th><i class="fa fa-at"></i> Nome</th>
                            <th>Pontuação</th>
                            <th>Missões Concluídas</th>
                            <th>Escola</th>
                            <th>Turma</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alunos as $aluno)

                        <tr>
                            <td>{{$aluno->matricula}}</td>
                            <td>{{$aluno->nome}}</td>
                            <td>{{$aluno->pontuacao}}</td>
                            <td>{{$aluno->missoes_concluidas}}</td>
                            <td>{{$aluno->turma->escola->nome}}</td>
                            <td>{{$aluno->turma->nome}}</td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>


            </div>

            <div class="m-t-30" style="display: inline-grid;">
                {{ $alunos->links() }}
            </div>

            @else

            <div class="alert alert-dark" role="alert">
                <h4 class="alert-heading">
                    <i class="mdi mdi-timer-sand-empty"></i>
                    Nenhum aluno encontrado
                </h4>
                <p>
                    Novos alunos cadastrados aparecerão aqui!
                </p>
                <hr>
                <p class="mb-0">
                    Esta tela permite a visualização da lista de alunos
                </p>
            </div>

            @endif

        </div>

>>>>>>> d245b3ea9fa6dd0fbb74bf5be991227157673993
    </div>
</div>

@endsection