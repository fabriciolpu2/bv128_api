@extends('admin.layouts.dashboard.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-7 mr-auto text-left mt-5">
            <h1 class="title">Detalhes da escola {{$data->nome}}</h1>
            <br>
        </div>
    </div>

    <div class="row text-center m-t-50">
        <div class="col-lg-6">
            <div class="card-box">
                <h4 class="header-title mb-4">
                    Turmas
                </h4>
                @if(count($data->turmas) > 0)
                    <div class="table-responsive">
                        <table class="table table-hover table-centered m-0">

                            <thead>
                            <tr>
                                <th><i class="fa fa-at"></i> Nome</th>
                                <th>Turno</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data->turmas as $turma)

                                <tr>
                                    <td>{{$turma->nome}}</td>
                                    <td>{{$turma->turno}}</td>
                                    <td><a href="{{route('turmas.alunos', $turma->id)}}"
                                           class="btn btn-primary">Acessar
                                            Turma</a></td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
