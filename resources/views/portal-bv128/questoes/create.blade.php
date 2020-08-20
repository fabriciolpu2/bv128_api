@extends('admin.layouts.dashboard.app')

@section('content')

<div class="row">
    <div class="col-lg-5 col-md-7 mr-auto text-left mt-5">
        <h1 class="title">Cadastro de Questão </h1>
        <h5 class="category">Formulário de cadastro de questão</h5>
        <br>

    </div>
</div>


<div style="margin-top: 30px">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">Nova questão</h3>
                </div>
                <div class="col-4 text-right">
                    <a class="btn btn-primary" href="{{route('questoes.lista', $id)}}" role="button">Voltar</a>
                </div>
            </div>


            <div class="card text-left  col-10" style="">
                <div class="card-body">

                    <p class="card-text"></p>
                    <form method="post" action="{{route('questoes.store', $id)}}">
                        @csrf
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titlo">
                        </div>
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea name="descricao" id="descricao" cols="30" rows="5"
                                class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="resposta1">Resposta 1 - Correta</label>
                            <input type="text" class="form-control" id="resposta1" name="respostas[0][descricao]"
                                placeholder="Resposta 1">
                        </div>
                        <div class="form-group">
                            <label for="resposta2">Resposta 2</label>
                            <input type="text" class="form-control" id="resposta2" name="respostas[1][descricao]"
                                placeholder="Resposta 2">
                        </div>
                        <div class="form-group">
                            <label for="resposta3">Resposta 3</label>
                            <input type="text" class="form-control" id="resposta3" name="respostas[2][descricao]"
                                placeholder="Resposta 3">
                        </div>

                        <button type="submit" class="btn btn-sucessbtn btn-success animation-on-hover">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection