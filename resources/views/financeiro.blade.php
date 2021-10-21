@extends('layouts.app_fianceiro')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="d-flex justify-content-around px-4">
            <div class="row">
d
                <div class="col col-md-6">
                    <lancamentos-component></lancamentos-component>
                </div>
                <div class="col col-md-6">
                   <saldo-component></saldo-component>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection