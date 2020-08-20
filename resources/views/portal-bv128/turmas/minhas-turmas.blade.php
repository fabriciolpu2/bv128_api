@extends('admin.layouts.dashboard.app')

@section('content')
<div class="row">
    <div class="col-lg-5 col-md-7 mr-auto text-left mt-5">
        <h1 class="title">Lista de Turmas</h1>
        <h5 class="category">Aqui está a lista de todas as turmas do professor  <strong> {{auth()->user()->name}} </strong></h5>
        <br>

    </div>
</div>


<div class="row text-center m-t-50">
    <div class="col-lg-12">
        <div class="card-box">
            <h4 class="header-title mb-4">
                Turmas
                ({{ $turmas->total()}})
            </h4>
            {{-- <a href="{{ route('usuarios.create') }}" class="pull-right btn btn-purple w-md waves-effect waves-light
            mb-4">
            <i class="mdi mdi-plus-circle"></i>
            Novo usuário
            </a> --}}
            <div class="toolbar">
                <!--        Here you can write extra buttons/actions for the toolbar              -->
                <div class="text-left ml-50 mb-20">
                    <h5>Exibindo {{ $turmas->firstItem() }} até {{ $turmas->lastItem()}} de {{ $turmas->total() }}
                        turmas</h5>
                </div>
            </div>
            @if ($turmas->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover table-centered m-0">

                    <thead>
                        <tr>
                            <th><i class="fa fa-at"></i> Nome</th>
                            <th>Escola</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($turmas as $turma)

                        <tr>
                            <td>{{$turma->nome}}</td>
                            <td>{{$turma->escola->nome}}</td>
                            <td> <a href="{{route('turmas.alunos', $turma)}}"
                                    class="btn btn-primary">Acessar
                                    Turma</a></td>

                        </tr>

                        @endforeach

                    </tbody>
                </table>


            </div>

            <div class="m-t-30" style="display: inline-grid;">
                {{ $turmas->links() }}
            </div>

            @else

            <div class="alert alert-dark" role="alert">
                <h4 class="alert-heading">
                    <i class="mdi mdi-timer-sand-empty"></i>
                    <p>Você ainda não possui nenhuma turma</p>
                </h4>
            </div>

            @endif

        </div>

    </div>
</div>



@endsection