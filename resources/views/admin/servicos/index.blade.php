@extends('admin.layouts.dashboard.app')
@section('content')


<div class="row text-center m-t-50">
    <div class="col-lg-12">
        <div class="card-box">
            <h4 class="header-title mb-4">
                Serviços

                ({{ $servicos->total()}})
            </h4>

            {{-- <a href="{{ route('servicos.create') }}" class="pull-right btn btn-{{config('app.color')}} w-md waves-effect waves-light mb-4">
                <i class="mdi mdi-plus-circle"></i>
                Novo
            </a> --}}
            <div class="row pull-left">
                <div class="col-sm-4">
                    <a href="{{ route('servicos.create') }}"
                        class=" btn btn-{{config('app.color')}} waves-effect waves-light mb-4">
                        <i class="mdi mdi-plus">
                        </i> Novo</a>
                </div><!-- end col -->
            </div>
            @if ($servicos->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover table-centered m-0">

                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Icone</th>
                            <th>Situação</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($servicos as $servico)

                        <tr>
                            <td>

                                {{$servico->titulo}}
                            </td>

                            <td>
                                <i class="{{$servico->icon}}"></i>

                            </td>

                            <td>

                                @if(($servico->isActive()))
                                <p class="mb-0 badge badge-success">Ativo</p>
                                @else
                                <p class="mb-0 badge badge-danger">Bloqueado</p>
                                @endif

                            </td>

                            <td>
                                <div class="btn-group" role="group">
                                    <a class="btn btn-icon waves-effect btn-light btn-sm" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-options-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu">


                                        <a href="{{ route('servicos.edit', ['id' => $servico->id])}}" class="dropdown-item">
                                            Editar
                                        </a>


                                        <a href="/admin/servicos/{{$servico->id}}/destroy" class="dropdown-item">
                                            Deletar
                                        </a>


                                        {{-- <blocked-component anunciante-object="{{$usuario}}"
                                            v-bind:bloqueado="{{ $usuario->isBlocked() ? 'true':'false' }}">
                                        </blocked-component> --}}


                                        {{-- <form action="{{ route('servicos.destroy', ['id' => $servico->id])}}"
                                            method="post">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button title="Deletar" class="dropdown-item">Deletar</button>
                                        </form> --}}


                                    </div>
                                </div>
                            </td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>


            </div>
            <div class="m-t-30" style="display: inline-grid;">
                {{ $servicos->links() }}
            </div>

            @else

            <div class="alert alert-dark" role="alert">
                <h4 class="alert-heading">
                    <i class="mdi mdi-timer-sand-empty"></i>
                    Sem registros no momento
                </h4>
                <p>
                    Novos serviços registrados aparecerão aqui!
                </p>
                <hr>

            </div>

            @endif


        </div>

    </div>

</div>
<!-- end row -->

<!-- end row -->
@endsection
