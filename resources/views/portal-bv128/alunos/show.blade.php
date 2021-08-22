@extends('admin.layouts.dashboard.app')

@section('content')

<div class="row">
    <div class="col-lg-5 col-md-7 mr-auto text-left mt-5">
        <h1 class="title">{{$aluno->nome}}</h1>
        <h6 class="category">{{$aluno->turma->nome}} | {{$aluno->turma->turno}}</h6>
        <br>

    </div>
</div>


<div class="row text-center m-t-50">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($aluno->recompensas as $recompensa)
                
                    <div class="col">
                        <div class="card">
                            <img src="/{{$recompensa->imagem}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{Str::upper($recompensa->descricao)}}</h5>
                                <p class="card-text">{{$recompensa->eventoHistorico->descricao}}</p>
                            </div>
                            <div class="card-footer">
                                {{-- {{ date('d/m/Y H:i:s', strtotime( $recompensa->pivot->created_at )) }} --}}
                                <small class="text-muted">Conquistado {{$recompensa->pivot->created_at->diffForHumans()}}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection