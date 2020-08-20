@extends('admin.layouts.dashboard.app')

@section('content')

<div class="row">
    <div class="col-lg-5 col-md-7 mr-auto text-left mt-5">
        <h1 class="title">Lista de questões </h1>
        <h5 class="category">Aqui está a lista de todas as questões do questionário {{ $questionario->fase }}</h5>
        <br>

    </div>
</div>

<div style="margin-top: 30px">
    <div class="container">
        <div class="col-lg-12">
            <div class="card-box">
                <div class="mb-20">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Questões</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('questionarios.index') }}" class="btn btn-sm btn-info">Voltar</a>
                            <a class="btn btn-sm btn-primary" href="{{route('questoes.nova', $questionario)}}">Inserir
                                Questão</a>
                        </div>
                    </div>
                </div>

                @foreach ($questoes as $q)
                <div class="card-box">
                    <h5 class="card-title">{{$q->id}}. {{$q->titulo}}</h5>
                    <p class="card-text"><strong>Descrição:</strong> {{$q->descricao}}</p>
                    @foreach ($q->respostas as $key => $item)
                    <div class="col-6">
                        <p class="card-text" style="@if($item->correta) background-color:#4de14d @endif">
                            <strong>{{$key+1}}:</strong> {{$item->descricao}}</p>
                    </div>
                    @endforeach

                </div>

                @endforeach

            </div>
        </div>
    </div>

    @endsection