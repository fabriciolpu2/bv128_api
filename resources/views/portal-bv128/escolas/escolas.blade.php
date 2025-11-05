@extends('admin.layouts.dashboard.app')

@section('content')
    <div class="row">
        <div class="col-lg-5 col-md-7 mr-auto text-left mt-5">
            <h1 class="title">Lista de escolas</h1>
            <br>

        </div>
    </div>


    <div class="row text-center m-t-50">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="header-title mb-4">
                    Escolas
                    ({{ $escolas->total()}})
                </h4>
                <div class="toolbar">
                    <div class="text-left ml-50 mb-20">
                        <h5>Exibindo {{ $escolas->firstItem() }} até {{ $escolas->lastItem()}} de {{ $escolas->total() }}
                            Escolas</h5>
                    </div>
                </div>
                @if ($escolas->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-hover table-centered m-0">

                            <thead>
                            <tr>
                                <th><i class="fa fa-at"></i> Nome</th>
                                <th>Turmas</th>
                                <th>Alunos</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($escolas as $escola)

                                <tr>
                                    <td>{{$escola->escola}}</td>
                                    <td>{{$escola->total_turmas}}</td>
                                    <td>{{$escola->total_alunos}}</td>
                                    <td> <a href="{{route('escolas.show', $escola->escola_id)}}"
                                            class="btn btn-primary">Acessar
                                            Escola</a></td>

                                </tr>

                            @endforeach

                            </tbody>
                        </table>


                    </div>

                    <div class="m-t-30" style="display: inline-grid;">
                        {{ $escolas->links() }}
                    </div>

                @else

                    <div class="alert alert-dark" role="alert">
                        <h4 class="alert-heading">
                            <i class="mdi mdi-timer-sand-empty"></i>
                            <p>Você ainda não possui nenhuma turma</p>
                        </h4>
                    </div>

                @endif

            </div>

        </div>
    </div>



@endsection
