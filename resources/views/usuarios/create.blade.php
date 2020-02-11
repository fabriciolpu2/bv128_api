@extends('layouts.dashboard.app')
@section('content')
    <div class="row m-t-50">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="header-title mb-4">
                    Novo Usuário

                </h4>
                @if(isset($usuario->id))
                    <form  method="POST" enctype="multipart/form-data" action="{{route('backend.usuarios.update', $usuario->id)}}">
                @else
                    <form method="POST" class="form-horizontal" action="{{ route('backend.usuarios.store') }}">
                @endif
                    @csrf

                    <div class="form-group row m-b-20">
                        <div class="col-12">
                            <label for="name">{{ __('labels.FullName') }}</label>

                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    name="name" value="{{isset($usuario->name) ? $usuario->name : old('name')}}" required autofocus placeholder="{{ __('placeholders.FullName') }}">

                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif

                        </div>
                    </div>

                    <div class="form-group row m-b-20">
                        <div class="col-12">
                            <label for="email">{{ __('labels.Email') }}</label>

                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                name="email" value="{{isset($usuario->email) ? $usuario->email : old('email')}}" required placeholder="{{ __('placeholders.Email') }}">

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group row m-b-20">
                        <div class="col-12">
                            <label for="roles">Papéis</label>
                            <select name="roles[]" id="roles" class="form-control" multiple required>
                                @foreach($roles as $role)
                                <option value="{{$role->id}}">
                                    {{$role->name}}
                                </option>
                                @endforeach

                            </select>
                            @if(isset($usuario))
                                <script type='text/javascript'>
                                    $('#roles').val([
                                            @foreach ($usuario->roles as $role)
                                                '{{ $role->id }}'
                                            @endforeach
                                        ]
                                    );
                                </script>
                            @endif
                        </div>
                    </div>



                    <div class="form-group row text-center m-t-10">
                        <div class="col-12">
                            <button type="submit" class="btn btn-block btn-custom waves-effect waves-light" type="submit">
                                {{ __('labels.Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
