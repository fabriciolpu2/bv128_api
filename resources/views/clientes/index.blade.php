@extends('layouts.dashboard.app')
@section('content')

    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">

                    <h4 class="page-title">Clientes</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->


        <div class="row">
            <div class="col-sm-4">
                <a href="{{ route('backend.clientes.create') }}"
                    class=" btn btn-{{config('app.color')}} waves-effect waves-light mb-4">
                    <i class="mdi mdi-plus">
                    </i> Novo</a>
            </div><!-- end col -->
        </div>
        @if ($clientes->count() > 0)
        <div class="row">
            @foreach($clientes as $cliente)
            <div class="col-md-3 ">
                <div class="text-center card-box">
                    <div class="dropdown pull-right" role="group">
                        <a class="btn btn-icon waves-effect btn-light btn-sm" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu">


                            <a href="{{ route('backend.clientes.edit', ['id' => $cliente->id])}}" class="dropdown-item">
                                Editar
                            </a>


                            <a href="/backend/clientes/{{$cliente->id}}/destroy" class="dropdown-item">
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

                    <div class="member-card pt-2 pb-2">
                        <div class="thumb-lg member-thumb m-b-10 mx-auto">
                           @if ($cliente->getFirstMediaUrl('images') != null)

                                <img src="{{$cliente->getFirstMediaUrl('images', 'thumb')}}" class="img-thumbnail" alt="cliente-image">
                           @else
                                <img src="/images/client-1.jpg" class="img-thumbnail" alt="cliente-image">
                           @endif
                        </div>

                        <div class="">
                            <h4 class="m-b-5">{{$cliente->nome}}</h4>
                        </div>

                    </div>

                </div>



            </div> <!-- end col -->
            @endforeach
            <div class="m-t-30" style="display: inline-grid;">
                {{ $clientes->links() }}
            </div>
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



<!-- end row -->

<!-- end row -->
@endsection
