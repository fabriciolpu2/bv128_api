@extends('admin.layouts.dashboard.app')

@section('content')

<div class="row">
    <div class="col-lg-5 col-md-7 mr-auto text-left mt-5">
        <h1 class="title">Editar Aula </h1>
        <h5 class="category">Formulário de edição da aula {{ $aula->nome }}</h5>
        <br>

    </div>
</div>


<div style="margin-top: 30px">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">

                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Editar Aula <small>{{ $aula->nome }}</small></h3>
                    </div>
                    <div class="col-4 text-right">
                        <a class="btn btn-primary" href="{{route('aulas.index')}}" role="button">Voltar</a>
                    </div>
                </div>

            </div>


            <div class="card-body">


                <form method="post" action="{{route('aulas.update', $aula)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('portal-bv128.aulas._form')

                    <div class="col-lg-12 col-md-6">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection