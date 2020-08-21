@extends('admin.layouts.dashboard.app')

@section('content')

<div class="row">
    <div class="col-lg-6 col-md-7 mr-auto text-left mt-5">
        <h1 class="title">Lista das Aulas </h1>
        <h5 class="category">Aqui está a lista de todas as aulas</h5>
        <br>

    </div>
</div>

<div style="margin-top: 30px">
    <div class="col-lg-12">
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div class="card-box">

            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-10">Aulas</h3>
                </div>
                <div class="col-4 text-right">
                    <a class="btn btn-primary" href="{{route('aulas.create')}}" role="button">Nova Aula</a>
                </div>
            </div>
            <div class="toolbar">
                <!--        Here you can write extra buttons/actions for the toolbar              -->
                <div class="text-left mb-20">
                    {{-- <h5>Exibindo {{ $alunos->firstItem() }} até {{ $alunos->lastItem()}} de {{ $alunos->total() }}
                    alunos</h5> --}}
                </div>
            </div>
            @if ($aulas->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover table-centered m-0">

                    <thead>
                        <tr>
                            <th>Imagem</th>
                            <th>Nome</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($aulas as $aula)

                        <tr>
                            <td>
                                <img src="{{ $aula->thumb }}" style="max-width:90px;">
                            </td>
                            <td>{{$aula->nome}}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a class="btn btn-icon waves-effect btn-light btn-sm" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-options-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="{{ route('aulas.edit', $aula)}}" class="dropdown-item">
                                            Editar
                                        </a>
                                        <form action="{{ route('aulas.destroy', $aula) }}" method="post">
                                            <input type="hidden" name="_method" value="delete">
                                            @csrf
                                            <button type="button" class="dropdown-item"
                                                onclick="confirm('Você realmente deseja deletar a aula {{ $aula->nome }}?') ? this.parentElement.submit() : ''">
                                                Deletar
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>


            </div>

            {{-- <div class="m-t-30" style="display: inline-grid;">
                {{ $alunos->links() }}
        </div> --}}

        @else

        <div class="alert alert-dark" role="alert">
            <h4 class="alert-heading">
                <i class="mdi mdi-timer-sand-empty"></i>
                Sem aulas cadastradas
            </h4>

        </div>

        @endif

    </div>

</div>
</div>

@endsection