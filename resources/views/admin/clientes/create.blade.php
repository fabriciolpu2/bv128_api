@extends('layouts.dashboard.app')
@section('content')
    <div class="row m-t-50">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="header-title mb-4">
                    Novo Cliente

                </h4>
                @if(isset($cliente->id))
                    <form  method="POST" enctype="multipart/form-data" action="{{route('clientes.update', $cliente->id)}}">
                @else
                    <form method="POST" enctype="multipart/form-data" class="form-horizontal" action="{{ route('clientes.store') }}">
                @endif
                {{ csrf_field() }}

                    <div class="form-group row m-b-20">
                        <div class="col-12">
                            <label for="nome">Nome</label>

                                <input id="nome" type="text" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}"
                                    name="nome" value="{{isset($cliente->nome) ? $cliente->nome : old('nome')}}" required autofocus placeholder="Insira o nome do cliente">

                                @if ($errors->has('nome'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nome') }}</strong>
                                </span>
                                @endif

                        </div>

                    </div>

                    <div class="form-group row m-b-20">
                        <div class="col-12">
                            <label for="depoimento">Depoimento</label>

                            <textarea row class="form-control{{ $errors->has('depoimento') ? ' is-invalid' : '' }}"

                                name="depoimento" rows="3" placeholder="Ex: A Amplomed fornece os melhores serviços e atendimento para nossa entidade">{{isset($cliente->depoimento) ? $cliente->depoimento : old('depoimento')}}</textarea>
                            @if ($errors->has('depoimento'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('depoimento') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row m-b-20">
                        <div class="form-group row">

                            <div class="col-12">
                                <label for="image">Imagem</label>

                                    <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}"
                                        name="image" value="{{ old('image')}}" required placeholder="Insira uma image da Filial">

                                    @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                    @endif

                            </div>



                        </div>
                    </div>


                    <div class="form-group row text-center m-t-10">
                        <div class="col-12">
                            <button type="submit" class="btn btn-block btn-custom btn-{{config('app.color')}} waves-effect waves-light" type="submit">
                                {{ __('labels.Register') }}
                            </button>
                            <a href="{{route('clientes.index')}}" class="btn btn-dark btn-block">Go Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
