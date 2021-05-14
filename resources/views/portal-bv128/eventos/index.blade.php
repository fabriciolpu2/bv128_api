@extends('admin.layouts.dashboard.app')

@section('content')

<div class="row">
    <div class="col-lg-5 col-md-7 mr-auto text-left mt-5">
        <h1 class="title">Lista de Eventos Históricos</h1>
        <h6 class="category">Aqui está a lista de todos os Eventos Históricos cadastrados</h6>
        <br>

    </div>
</div>


<div class="row text-center m-t-50">
    <div class="col-lg-12">
        <div class="card-box">
            <h4 class="header-title mb-4">
                Eventos Históricos
                ({{ $eventos->total()}})
            </h4>
            <a href="{{ route('eventos.create') }}" class="pull-right btn btn-purple w-md waves-effect waves-light
            mb-4">
            <i class="mdi mdi-plus-circle"></i>
            Novo usuário
            </a>
            <div class="toolbar">
                <!--        Here you can write extra buttons/actions for the toolbar              -->
                <div class="text-left ml-50 mb-20">
                    <h5>Exibindo {{ $eventos->firstItem() }} até {{ $eventos->lastItem()}} de {{ $eventos->total() }}
                        eventos</h5>
                </div>
            </div>
            
            @if ($eventos->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover table-centered m-0">
                    <thead>
                        <tr>
                            <th><i class="fa fa-user"></i> Tipo</th>
                            <th><i class="fa fa-at"></i> Titulo</th>
                            <th>Descrição</th>
                            <th>Contexto Históricos</th>
                            <th>Data</th>
                            <th>Cenário</th>
                            <th>Fixo</th>
                            <th>Posicao</th>
                            <th>Recompensa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($eventos as $evento)
                        <tr>
                            <td>{{$evento->tipo}}</td>
                            <td>{{$evento->titulo}}</td>
                            <td>{{$evento->descricao}}</td>
                            <td>{{$evento->contexto_historico}}</td>
                            <td>{{$evento->data}}</td>
                            <td>{{$evento->cenario}}</td>
                            <td>{{$evento->fixo}}</td>
                            <td>{{$evento->posicao_vector3}}</td>
                            <td>{{$evento->recompensa_id}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="m-t-30" style="display: inline-grid;">
                {{ $eventos->links() }}
            </div>

            @else

            <div class="alert alert-dark" role="alert">
                <h4 class="alert-heading">
                    <i class="mdi mdi-timer-sand-empty"></i>
                    Nenhum evento encontrado
                </h4>
                <p>
                    Novos eventos cadastrados aparecerão aqui!
                </p>
                <hr>
                <p class="mb-0">
                    Esta tela permite a visualização da lista de eventos historicos
                </p>
            </div>

            @endif

        </div>

    </div>
</div>

@endsection