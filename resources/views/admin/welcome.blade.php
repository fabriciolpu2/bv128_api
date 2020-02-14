@extends('layouts.app')

@section('content')
<!--hero section start-->
{{-- <section class="hero-section background-img ptb-100"
    style="background: url('images/hero-bg-0.jpg')no-repeat center center / cover"> --}}
<section class="hero-section background-img ptb-100" id="topo">
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" >
        <source src="videos/demo.mp4" type="video/mp4">
    </video>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="hero-content-left text-white text-center mt-5 ptb-100">
                    <h1 class="text-white text-uppercase">Somos Especialistas</h1>
                    <p class="lead text-uppercase">Em <span class="text-black font-weight-800">engenharia clínica</span>
                        & <span class="text-black font-weight-800">física médica</span></p>

                    <a href="{{ route('contato') }}" class="btn solid-btn">Contate-nos</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--hero section end-->



@endsection
