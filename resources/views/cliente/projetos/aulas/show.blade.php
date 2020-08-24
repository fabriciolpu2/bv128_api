@extends('cliente.layouts.app')

@section('content')

@include('cliente.projetos.aulas.header')



<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                {{-- <h6 class="category"></h6> --}}
                <h3 class="title">{{$aula->nome}}</h3>
                <p>{{$aula->descricao}}
                </p>
                <br />
                <br />
                <br />
                {!!$aula->corpo!!}
            </div>
        </div>
    </div>
</div>
@endsection