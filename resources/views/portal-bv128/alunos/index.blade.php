@extends('admin.layouts.dashboard.app')

@section('content')

<div class="row">
    <div class="col-lg-5 col-md-7 mr-auto text-left mt-5">
        <h1 class="title">Lista de Alunos</h1>
        <h6 class="category">Aqui está a lista de todos os alunos cadastrados</h6>
        <br>


    </div>
</div>


<div class="row text-center m-t-50">
    <div class="col-lg-12">
        @if(session('error'))
            <div class="alert alert-warning" role="alert">
                {{session('error')}}
            </div>
        @endif
        <div class="card-box">
            <h4 class="header-title mb-4">
                Alunos
                ({{ $alunos->total()}})
            </h4>
            <div class="toolbar">
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
                            <th>Conquistas</th>
                            <th>Questionários</th>
                            <th>Turma</th>
                            <th>Ultimo Login</th>
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
                            <td>
                                <a href="{{route('alunos.show',  $aluno->id)}}"><img src="/images/medal.svg" height="35px" alt="">
                                    <span class="badge badge-danger" style="margin-left: -10px;">{{sizeOf($aluno->recompensas)}}</span>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('alunos.questionarios', $aluno->id) }}" title="Ver questionários do aluno">
                                    <span class="badge badge-danger" style="margin-left: -10px;">
                                        <i class="fa fa-file-alt"></i>
                                    </span>
                                </a>
                            </td>
                            <td>{{$aluno->turma->nome}}</td>
                            <td>{{ date('d/m/Y H:i:s', strtotime( $aluno->historico->updated_at )) }}</td>
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

    </div>
</div>

@endsection
