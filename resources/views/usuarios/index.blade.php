@extends('layouts.dashboard.app')
@section('content')



<div class="row text-center m-t-50">
    <div class="col-lg-12">
        <div class="card-box">
            <h4 class="header-title mb-4">
                Usuários
                ({{ $usuarios->total()}})
			</h4>
            <a href="{{ route('backend.usuarios.create') }}" class="pull-right btn btn-danger w-md waves-effect waves-light mb-4">
                    <i class="mdi mdi-plus-circle"></i>
                    Novo usuário
                </a>
			@if ($usuarios->count() > 0)
				<div class="table-responsive">
					<table class="table table-hover table-centered m-0">

						<thead>
							<tr>
								<th><i class="fa fa-user"></i> Nome</th>
								<th><i class="fa fa-at"></i> Email</th>
								<th>Papéis</th>
								<th>Status</th>
								<th>Ações</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($usuarios as $usuario)

                                <tr>
                                    <td>

                                        {{$usuario->name}}
                                    </td>

                                    <td>

                                        {{ $usuario->email }}
                                    </td>

                                    <td>
                                        @foreach ($usuario->roles->pluck('name') as $role)
                                            <p class=" badge badge-info">
                                                {{ $role }}
                                            </p>
                                        @endforeach
                                    </td>

                                    <td>
                                            @if(!$usuario->isBlocked())
                                                <p class="badge badge-purple">Ativo</p>
                                            @else
                                                <p class="badge badge-danger">Bloqueado</p>
                                            @endif
                                        </td>

                                    <td>
                                        <div class="btn-group" role="group">
                                            <a class="btn btn-icon waves-effect btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="icon-options-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="{{ route('backend.usuarios.edit', ['id' => $usuario->id])}}" class="dropdown-item">
                                                    Editar
                                                </a>

                                                <blocked-component anunciante-object="{{$usuario}}" v-bind:bloqueado="{{ $usuario->isBlocked() ? 'true':'false' }}"></blocked-component>

                                            </div>
                                        </div>
                                    </td>
                                </tr>

							@endforeach

						</tbody>
					</table>


				</div>

				<div class="m-t-30" style="display: inline-grid;">
					{{ $usuarios->links() }}
                </div>

            @else

                <div class="alert alert-dark" role="alert">
                    <h4 class="alert-heading">
                        <i class="mdi mdi-timer-sand-empty"></i>
                        Nenhum novo usuário encontrado!
                    </h4>
                    <p>
                        Novos usuários cadastrados aparecerão aqui!
                    </p>
                    <hr>
                    <p class="mb-0">
                        Esta tela dá acesso à edição e bloqueio de usuários.
                    </p>
                </div>

            @endif

		</div>

    </div>
</div>
<!-- end row -->

<!-- end row -->
@endsection
