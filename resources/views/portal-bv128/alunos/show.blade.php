@extends('admin.layouts.dashboard.app')

@section('content')

    <div class="row">
        <div class="col-lg-5 col-md-7 mr-auto text-left mt-5">
            <h1 class="title">{{$aluno->aluno_nome}}</h1>
            <h6 class="category">{{$aluno->turma}} | {{$aluno->turno}}</h6>
            <h6 class="category">{{$aluno->escola_nome}} </h6>
            <br>

        </div>
    </div>


    <div class="row text-center m-t-50">
        @if(count($aluno->recompensas) > 0)
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title mb-4">
                        Recompensas coletadas
                    </h4>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach ($aluno->recompensas as $recompensa)
                            <div class="col">
                                <div class="card h-100 d-flex flex-column" style="min-height: 450px;">
                                    <img src="{{ $recompensa['imagem'] }}" class="card-img-top"
                                         style="width: 100%; height: 200px; object-fit: cover; padding: 10px;">

                                    <div class="card-body flex-grow-1">
                                        <h5 class="card-title">{{ Str::upper($recompensa['descricao']) }}</h5>
                                        <p class="card-text">{{ $recompensa['descricao'] }}</p>
                                    </div>

                                    <div class="card-footer mt-auto">
                                        <small
                                            class="text-muted">Conquistado {{ $recompensa['data_conquista'] }}</small>
                                    </div>
                                </div>
                            </div>

                            <br>
                        @endforeach
                    </div>
                </div>
            </div>
        @elseif(count($aluno->questionarios) == 0 && count($aluno->recompensas) == 0 )
            <div class="jumbotron jumbotron-fluid col-lg-12 col-md-6">
                <div class="container">
                    <h1 class="display-4">Nem uma recompensa coletada ou questionário respondido</h1>
                    <p class="lead">Ao coletar as recompensas no BV128 VR, elas irão aparecer nesta tela.</p>
                </div>
            </div>
        @endif
        @if(count($aluno->questionarios) > 0)
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title mb-4">
                        Questionários
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-hover table-centered m-0">

                            <thead>
                            <tr>
                                <th>Questionário</th>
                                <th>Nota</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($aluno->questionarios as $questionario)
                                <tr>
                                    <td>
                                        <a href="{{route('alunos.questionarios.respostas',  ['id' => $aluno['aluno_id'],'questionario_id' => $questionario['questionario_id']])}}">{{ucfirst($questionario['fase'])}}</a>
                                    </td>
                                    <td>{{$questionario['acertos']}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-hover table-centered m-0">
                                <thead>
                                <tr>
                                    <th>Média</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td colspan="2">
                                        {{$aluno->media_acertos}}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

@endsection
