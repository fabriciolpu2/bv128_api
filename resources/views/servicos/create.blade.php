@extends('layouts.dashboard.app')
@section('content')
    <div class="row m-t-50">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="header-title mb-4">
                    Novo Serviço

                </h4>
                @if(isset($servico->id))
                    <form  method="POST" enctype="multipart/form-data" action="{{route('backend.servicos.update', $servico->id)}}">
                @else
                    <form method="POST" class="form-horizontal" action="{{ route('backend.servicos.store') }}">
                @endif
                {{ csrf_field() }}

                    <div class="form-group row m-b-20">
                        <div class="col-9">
                            <label for="titulo">{{ __('labels.Title') }}</label>

                                <input id="titulo" type="text" class="form-control{{ $errors->has('titulo') ? ' is-invalid' : '' }}"
                                    name="titulo" value="{{isset($servico->titulo) ? $servico->titulo : old('titulo')}}" required autofocus placeholder="Insira um titulo">

                                @if ($errors->has('titulo'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('titulo') }}</strong>
                                </span>
                                @endif

                        </div>


                            <div class=" col-3">
                                <label for="destaque">Destacado?</label>

                                @if (isset($servico) && $servico->destaque === 1)
                                <input type="checkbox" name="destaque" checked="" >
                            @else
                                <input type="checkbox" name="destaque" {{ old('destaque') ? 'checked' : '' }} >
                            @endif

                                    @if ($errors->has('destaque'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('destaque') }}</strong>
                                    </span>
                                    @endif

                            </div>
                    </div>



                    <div class="form-group row m-b-20">
                        <div class="col-12">
                            <label for="descricao">{{ __('labels.Description') }}</label>

                            <textarea row class="form-control{{ $errors->has('descricao') ? ' is-invalid' : '' }}"
                                 placeholder="Descreva o serviço"
                                name="descricao" rows="3">{{isset($servico->descricao) ? $servico->descricao : old('descricao')}}</textarea>
                            @if ($errors->has('descricao'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('descricao') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group row m-b-20">
                        <div class="col-4">
                            <label for="icon">Icone </label>

                                <input id="icon" type="text" class="form-control{{ $errors->has('icon') ? ' is-invalid' : '' }}"
                        name="icon" value="{{isset($servico->icon) ? $servico->icon : old('icon')}}" autofocus placeholder="Insira um icon">

                                @if ($errors->has('icon'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('icon') }}</strong>
                                </span>
                                @endif

                        </div>
                        <div class="col-4">
                            <label for="cor">Cor </label>

                                <input id="cor" type="color" class="form-control{{ $errors->has('color') ? ' is-invalid' : '' }}"
                        name="color" value="{{isset($servico->color) ? $servico->color : old('color')}}" autofocus placeholder="Escolha uma cor para o texto">

                                @if ($errors->has('color'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('color') }}</strong>
                                </span>
                                @endif

                        </div>

                        <div class="col-4">
                            <label for="cor">Pertence a </label>

                            <select class="form-control" name="superior_id" value="{{isset($servico->superior_id) ? $servico->superior_id : ''}}"    >
                                <option value="">Selecione ...</option>
                                @foreach($superiores as $superior)
                                    <option value="{{$superior->id}}">
                                        {{$superior->titulo}}
                                    </option>
                                @endforeach
                            </select>

                                @if ($errors->has('color'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('color') }}</strong>
                                </span>
                                @endif

                        </div>
                    </div>

                    <div class="form-group row text-center m-t-10">
                        <div class="col-12">
                            <button type="submit" class="btn btn-block btn-custom btn-{{config('app.color')}} waves-effect waves-light" type="submit">
                                {{ __('labels.Register') }}
                            </button>
                            <a href="{{route('backend.servicos.index')}}" class="btn btn-dark btn-block">Go Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
