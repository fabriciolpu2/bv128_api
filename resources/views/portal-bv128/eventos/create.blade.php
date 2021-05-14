@extends('admin.layouts.dashboard.app')

@section('content')

<div class="row">
    <div class="col-lg-5 col-md-7 mr-auto text-left mt-5">
        <h1 class="title">Cadastro de Evento Historico </h1>
        <h5 class="category">Formulário de cadastro de Evento Histórico</h5>
        <br>

    </div>
</div>


<div style="margin-top: 30px">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">Nova Evento</h3>
                </div>
                <div class="col-4 text-right">
                    <a class="btn btn-primary" href="{{route('eventos.index')}}" role="button">Voltar</a>
                </div>
            </div>


            <div class="card text-left  col-10" style="">
                <div class="card-body">

                    <p class="card-text"></p>
                    <form method="post" action="{{route('eventos.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="tipo">Tipo</label>
                            <select name="tipo" id="tipo" class="form-control">
                                <option value="FOTO">Foto</option>
                                <option value="CARTA">Carta</option>
                                <option value="JORNAL">Jornal</option>
                                <option value="PINTURA">Pintura</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recompensa_id">Recompensa</label>
                            <select name="recompensa_id" id="recompensa_id" class="form-control">
                                @foreach ($recompensas as $recompensa)
                                    <option value="{{$recompensa->id}}">{{$recompensa->descricao}}</option>    
                                @endforeach
                            </select>
                        </div>
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
                            <label for="contexto_historico">Contexto Histórico</label>
                            <input type="text" class="form-control" id="contexto_historico" name="contexto_historico"
                                placeholder="Contexto Histórico">
                        </div>
                        <div class="form-group">
                            <label for="contexto_historico">Data</label>
                            <input type="text" class="form-control" id="data" name="data"
                                placeholder="Data">
                        </div>
                        <div class="form-group">
                            <label for="cenario">Cenário</label>
                            <select name="cenario" id="cenario" class="form-control">
                                <option value="FORTE_SAO_JOAQUIM">Forte São Joaquim</option>
                                <option value="FAZENDA_SAO_MARCOS">Fazenda São Marcos</option>
                                <option value="BOA_VISTA_1890">Boa Vista 1890</option>
                                <option value="BOA_VISTA_1924">Boa Vista 1924</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="imagem">Foto</label>
                            <input type="file" class="form-control" id="imagem" name="imagem">
                        </div>
                        <div class="form-group">
                            <label for="audio">Audio</label>
                            <input type="file" class="form-control" id="audio" name="audio">
                        </div>
                        <div class="form-group">
                            <label for="posicao_vector3">Posição</label>
                            <input type="text" class="form-control" id="posicao_vector3" name="posicao_vector3"
                                placeholder="x:0;y:10;z:4">
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="fixo" name="fixo">
                            <label class="form-check-label" for="fixo">Fixo</label>
                        </div>

                        <button type="submit" class="btn btn-sucessbtn btn-success animation-on-hover">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection