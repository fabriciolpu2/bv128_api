@extends('admin.layouts.dashboard.app')

@section('content')

    <div class="row">
        <div class="col-lg-5 col-md-7 mr-auto text-left mt-5">
            <h1 class="title">Questionários</h1>
            <br>
        </div>
    </div>


    <div class="row text-center m-t-50">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="header-title mb-4">
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
                        @foreach ($questionarios->questionarios as $questionario)


                            <tr>
                                <td>
                                    <a href="{{route('alunos.questionarios.respostas',  ['id' => 1,'questionario_id' => $questionario['questionario_id']])}}">{{ucfirst($questionario['fase'])}}</a>
                                </td>
                                <td>{{$questionario['acertos']}}</td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection
