@extends('admin.layouts.dashboard.app')

@section('content')
<div style="margin-top: 100px">
    <div class="container">
        <div class="col-sm-12">
            <a class="btn btn-primary" href="{{route('questoes.nova', $id)}}" role="button">Novo</a>
            @foreach ($questoes as $q)
            <div class="card text-left  col-10" style="">
                
                <div class="card-body">
                    <h5 class="card-title">{{$q->id}}. {{$q->titulo}}</h5>
                    <p class="card-text"><strong>Descrição:</strong> {{$q->descricao}}</p>
                    @foreach ($q->respostas as $key => $item)
                    <p class="card-text" style="@if($item->correta) background-color:#4de14d @endif"><strong>{{$key+1}}:</strong> {{$item->descricao}}</p>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
