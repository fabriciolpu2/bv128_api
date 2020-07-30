@extends('admin.layouts.dashboard.app')

@section('content')
<div style="margin-top: 100px">
    <div class="container">
        <div class="col-sm-12">
            <a class="btn btn-primary" href="{{route('questoes.lista', $id)}}" role="button">Voltar</a>
            <div class="card text-left  col-10" style="">
                <div class="card-body">
                    
                    <h5 class="card-title">Nova Questao</h5>
                    <p class="card-text"></p>
                    <form method="post" action="{{route('questoes.store', $id)}}">
                        @csrf
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titlo">
                        </div>
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea name="descricao" id="descricao" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="resposta1">Resposta 1 - Correta</label>
                            <input type="text" class="form-control" id="resposta1" name="respostas[0][descricao]" placeholder="Resposta 1">
                        </div>
                        <div class="form-group">
                            <label for="resposta2">Resposta 2</label>
                            <input type="text" class="form-control" id="resposta2" name="respostas[1][descricao]" placeholder="Resposta 2">
                        </div>
                        <div class="form-group">
                            <label for="resposta3">Resposta 3</label>
                            <input type="text" class="form-control" id="resposta3" name="respostas[2][descricao]" placeholder="Resposta 3">
                        </div>

                        <button type="submit" class="btn btn-sucessbtn btn-success animation-on-hover">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
