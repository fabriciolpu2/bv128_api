@extends('cliente.layouts.app')

@section('content')

@include('cliente.layouts.headers.projeto_detalhe')
<section class="features-4">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-9">
                <div class="section-heading mb-4">
                    <h2>Fale conosco</h2>
                    <p class="lead">
                        Dúvidas em relação aos nossos serviços? Não deixe de entrar em contato. Responderemos o mais breve possível.
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6">
                <contact-us-form></contact-us-form>
                <p class="form-message"></p>
            </div>
            {{-- <div class="col-md-5">
                <div class="contact-info-wrap">
                    <ul class="list-creative">
                        @foreach ($filiais as $filial)
                            <li>
                                <dl class="list-terms-medium address">
                                    <dt>{{$filial->cidade}}, {{$filial->estado}}</dt>
                                    <dd><p>{{$filial->logradouro}}</p></dd>
                                </dl>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div> --}}
        </div>
    </div>
</section>
@endsection
