@extends('layouts.dashboard.app')
@section('content')

    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">

                    <h4 class="page-title">Filiais</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->


        <div class="row">
            <div class="col-sm-4">
                <a href="{{ route('backend.filiais.create') }}"
                    class=" btn btn-{{config('app.color')}} waves-effect waves-light mb-4">
                    <i class="mdi mdi-plus">
                    </i> Novo</a>
            </div><!-- end col -->
        </div>
        @if ($filiais->count() > 0)
        <div class="row">
            @foreach($filiais as $filial)
            <div class="col-md-3 ">
                <div class="text-center card-box">
                    <div class="dropdown pull-right" role="group">
                        <a class="btn btn-icon waves-effect btn-light btn-sm" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu">


                            <a href="{{ route('backend.filiais.edit', ['id' => $filial->id])}}" class="dropdown-item">
                                Editar
                            </a>


                            <a href="/backend/filiais/{{$filial->id}}/destroy" class="dropdown-item">
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
                           @if ($filial->getFirstMediaUrl('images') != null)

                                <img src="{{$filial->getFirstMediaUrl('images', 'thumb')}}" class="img-fluid" alt="filial-image">
                           @else
                           <img src="/images/client-1.jpg" class="rounded-circle img-thumbnail" alt="filial-image">
                           @endif
                        </div>

                        <div class="">
                            <h4 class="m-b-5">{{$filial->nome}}</h4>
                            <p class="text-muted"><span> <a class="text-pink">{{$filial->contato_1}}</a> </span></p>
                        </div>

                    </div>

                </div>

            </div> <!-- end col -->
            @endforeach
            <div class="m-t-30" style="display: inline-grid;">
                {{ $filiais->links() }}
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
