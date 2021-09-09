@extends('admin.layouts.dashboard.app')

@section('content')

<div class="row">
    <div class="col-lg-6 col-md-7 mr-auto text-left mt-5">
        <h1 class="title">Lista de Alunos da Turma </h1>
        <h5 class="category">Aqui está a lista de todos os alunos cadastrados na turma <strong> {{ $turma->nome }}
            </strong> da escola <strong>{{ $turma->escola->nome }} </strong></h5>
        <br>

    </div>
</div>

<div style="margin-top: 30px">
    <div class="col-lg-12">
        <div class="card-box">

            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-10">Alunos</h3>
                </div>
                <div class="col-4 text-right">
                    <a class="btn btn-primary" href="{{route('minhas-turmas')}}" role="button">Voltar</a>
                </div>
            </div>
            <div class="toolbar">
                <!--        Here you can write extra buttons/actions for the toolbar              -->
                <div class="text-left mb-20">
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
                            <th>Recompensas</th>
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
                            <td>
                                <a href="/admin/portal-bv128/alunos/{{$aluno->id}}"><img src="/images/medal.svg" height="35px" alt="">
                                    <span class="badge badge-danger" style="margin-left: -10px;">{{sizeOf($aluno->recompensas)}}</span>
                                </a>
                            </td>
                                
                                
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

    </div>
</div>

@endsection