@extends('admin.layouts.dashboard.app')

@section('content')

    <div class="row">
        <div class="col-lg-5 col-md-7 mr-auto text-left mt-5">
            <h1 class="title">{{$questionario->nome}}</h1>
            <br>

        </div>
    </div>

    <div class="row text-center m-t-50">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="header-title mb-4">
                    Respostas
                </h4>
                <div class="table-responsive">
                    <table class="table table-hover table-centered m-0">

                        <thead>
                        <tr>
                            <th>Descrição</th>
                            <th>Questão</th>
                            <th>Resposta</th>
                            <th>Gabarito</th>
                            <th>Respondida em</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($questionario->respostas as $resposta)

                            <tr>
                                <td class="text-truncate" style="max-width: 500px;">{{ucfirst($resposta['descricao_questao'])}}</td>
                                <td>{{ucfirst($resposta['titulo'])}}</td>
                                <td>{{$resposta['descricao']}}</td>
                                <td><span
                                        class="badge badge-pill badge-{{$resposta['correta'] ? 'success' : 'warning'}}">{{$resposta['correta'] ? 'Correta' : 'Incorreta'}}</span>
                                </td>
                                <td>{{$resposta['created_at']}} </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection
