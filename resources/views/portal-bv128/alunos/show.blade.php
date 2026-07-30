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
            <div class="col-lg-8">
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
            <div class="col-lg-4">
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

    <div class="row text-center m-t-50">
        <div class="col-lg-12">
            <div class="card-box p-4">
                <h4 class="header-title mb-4" style="font-size: 22px;">
                    <i class="mdi mdi-book-open-page-variant"></i>
                    Textos de Fluência
                </h4>

                @if(count($textosFluencia) > 0)
                    <div class="table-responsive">
                        <table class="table table-hover table-centered m-0" style="font-size: 16px;">
                            <thead>
                            <tr>
                                <th class="py-3">Texto</th>
                                <th class="text-center py-3">Nota</th>
                                <th class="text-center py-3">Tempo</th>
                                <th class="text-center py-3">Velocidade</th>
                                <th class="text-center py-3">Palavras não lidas</th>
                                <th class="text-center py-3">Áudio</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($textosFluencia as $texto)
                                @php
                                    $palavrasNaoLidas = array_filter(array_map('trim', explode(',', (string) $texto->palavras_nao_lidas)));
                                @endphp
                                <tr>
                                    <td class="text-left py-3">
                                        <i class="mdi mdi-text-box-outline text-muted"></i>
                                        {{ $texto->textoFluencia->titulo ?? '-' }}
                                    </td>
                                    <td class="text-center py-3">
                                        @if(is_null($texto->nota))
                                            <span class="text-muted">-</span>
                                        @else
                                            <span class="badge badge-{{ $texto->nota >= 8 ? 'success' : ($texto->nota >= 5 ? 'warning' : 'danger') }}" style="font-size: 14px; padding: 6px 12px;">
                                                {{ $texto->nota }}
                                            </span>
                                        @endif
                                    </td>
                                    <td class="text-center py-3">
                                        @if(is_null($texto->tempo))
                                            <span class="text-muted">-</span>
                                        @else
                                            <i class="mdi mdi-timer-outline text-muted"></i>
                                            {{ $texto->tempo }}
                                        @endif
                                    </td>
                                    <td class="text-center py-3">
                                        @if(is_null($texto->velocidade))
                                            <span class="text-muted">-</span>
                                        @else
                                            <i class="mdi mdi-speedometer text-muted"></i>
                                            {{ $texto->velocidade }} ppm
                                        @endif
                                    </td>
                                    <td class="text-center py-3">
                                        @if(count($palavrasNaoLidas) > 0)
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-palavras-{{ $texto->id }}">
                                                {{ count($palavrasNaoLidas) }} palavra{{ count($palavrasNaoLidas) > 1 ? 's' : '' }}
                                            </button>

                                            <div class="modal fade" id="modal-palavras-{{ $texto->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">
                                                                Palavras não lidas — {{ $texto->textoFluencia->titulo ?? '-' }}
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body text-left">
                                                            @foreach($palavrasNaoLidas as $palavra)
                                                                <span class="badge badge-danger mr-1 mb-1" style="font-size: 14px; padding: 6px 12px;">{{ $palavra }}</span>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <span class="badge badge-success" style="font-size: 14px; padding: 6px 12px;">Nenhuma</span>
                                        @endif
                                    </td>
                                    <td class="text-center py-3">
                                        @if($texto->audio_url)
                                            <audio controls src="{{ $texto->audio_url }}" style="height: 40px; max-width: 260px;"></audio>
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="alert alert-dark" role="alert">
                        <h4 class="alert-heading">
                            <i class="mdi mdi-timer-sand-empty"></i>
                            Nenhum texto de fluência respondido
                        </h4>
                        <p class="mb-0">
                            Ao realizar a leitura de textos no BV128 VR, os resultados aparecerão aqui.
                        </p>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
