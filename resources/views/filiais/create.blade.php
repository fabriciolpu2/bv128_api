@extends('layouts.dashboard.app')
@section('content')
    <div class="row m-t-50">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="header-title mb-4">
                    Nova Filial

                </h4>
                @if(isset($filial->id))
                    <form  method="POST" enctype="multipart/form-data" action="{{route('backend.filiais.update', $filial->id)}}">
                @else
                    <form method="POST" enctype="multipart/form-data" class="form-horizontal" action="{{ route('backend.filiais.store') }}">
                @endif
                {{ csrf_field() }}

                    <div class="form-group row m-b-20">
                        <div class="col-8">
                            <label for="ordem">Nome</label>

                                <input id="nome" type="text" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}"
                                    name="nome" value="{{isset($filial->nome) ? $filial->nome : old('nome')}}" required autofocus placeholder="Insira o nome da Filial">

                                @if ($errors->has('nome'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nome') }}</strong>
                                </span>
                                @endif

                        </div>

                        <div class="col-4">
                            <label for="ordem">Ordem</label>

                                <input id="ordem" type="number" class="form-control{{ $errors->has('ordem') ? ' is-invalid' : '' }}"
                                    name="ordem" value="{{isset($filial->ordem) ? $filial->ordem : old('ordem')}}" required placeholder="Insira o ordem que a filial será mostrada">

                                @if ($errors->has('ordem'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('ordem') }}</strong>
                                </span>
                                @endif

                        </div>
                    </div>

                    <div class="form-group row m-b-20">
                        <div class="col-8">
                            <label for="email">Email</label>

                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="email" value="{{isset($filial->email) ? $filial->email : old('email')}}" required autofocus placeholder="Insira o email da Filial">

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif

                        </div>

                        <div class="col-4">
                            <label for="contato_1">Telefone</label>

                                <input id="contato_1" type="text" data-mask="(00) 0000-0000"  class="form-control{{ $errors->has('contato_1') ? ' is-invalid' : '' }}"
                                    name="contato_1" value="{{isset($filial->contato_1) ? $filial->contato_1 : old('contato_1')}}" required placeholder="(00)0000-0000">

                                @if ($errors->has('contato_1'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('contato_1') }}</strong>
                                </span>
                                @endif

                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="col-12">
                            <label for="image">Imagem</label>

                                <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}"
                                    name="image" value="{{ old('image')}}" placeholder="Insira uma image da Filial">

                                @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                                @endif

                        </div>



                    </div>

                    <hr />

                    <div class="form-group row m-b-20">
                        <div class="col-8">
                            <label for="logradouro">Logradouro</label>

                                <input id="logradouro" type="text" class="form-control{{ $errors->has('logradouro') ? ' is-invalid' : '' }}"
                                    name="logradouro" value="{{isset($filial->logradouro) ? $filial->logradouro : old('logradouro')}}" placeholder="Ex: Rua Iuguslavia">

                                @if ($errors->has('logradouro'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('logradouro') }}</strong>
                                </span>
                                @endif

                        </div>
                        <div class="col-4">
                            <label for="numero">Número</label>

                                <input id="numero" type="text" class="form-control{{ $errors->has('numero') ? ' is-invalid' : '' }}"
                                    name="numero" value="{{isset($filial->numero) ? $filial->numero : old('numero')}}" placeholder="Ex: 1000, s/n">

                                @if ($errors->has('numero'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('numero') }}</strong>
                                </span>
                                @endif

                        </div>
                    </div>

                    <div class="form-group row m-b-20">
                        <div class="col-6">
                            <label for="cidade">Cidade</label>

                                <input id="cidade" type="text" class="form-control{{ $errors->has('cidade') ? ' is-invalid' : '' }}"
                                    name="cidade" value="{{isset($filial->cidade) ? $filial->cidade : old('cidade')}}" required placeholder="Ex: Boa Vista">

                                @if ($errors->has('cidade'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('cidade') }}</strong>
                                </span>
                                @endif

                        </div>

                        <div class="col-6">
                            <label for="estado">Estado</label>

                                <input id="estado" type="text" class="form-control{{ $errors->has('estado') ? ' is-invalid' : '' }}"
                                    name="estado" value="{{isset($filial->estado) ? $filial->estado : old('estado')}}" placeholder="Ex: Roraima">

                                @if ($errors->has('estado'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('estado') }}</strong>
                                </span>
                                @endif

                        </div>
                    </div>





                    <div class="form-group row text-center m-t-10">
                        <div class="col-12">
                            <button type="submit" class="btn btn-block btn-custom btn-{{config('app.color')}} waves-effect waves-light" type="submit">
                                {{ __('labels.Register') }}
                            </button>
                            <a href="{{route('backend.filiais.index')}}" class="btn btn-dark btn-block">Go Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
