@extends('layouts.app')

@section('content')

@include('cliente.layouts.headers.lading_page')
<!-- sobre / informacoes sobre o canaime -->

<div class="features-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 mr-auto text-left">
                <h1 class="title">Os melhores games educativos!</h1>
                <p class="description">5,000 capacity venue, holding some of the latest technology lighting with a 24 colour laser system Amnesia is one of the islands most legendary clubs.</p>
                <a class="btn btn-primary mt-3" href="javascript:;">
                    Learn more <i class="tim-icons icon-double-right"></i>
                </a>
            </div>
            <div class="col-lg-8 p-sm-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="info info-primary">
                            <div class="icon icon-white">
                                <i class="tim-icons icon-satisfied"></i>
                            </div>
                            <h4 class="info-title">Best Quality</h4>
                            <p class="description">Gain access to the demographics, psychographics, and location of unique people.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info info-primary">
                            <div class="icon icon-white">
                                <i class="tim-icons icon-palette"></i>
                            </div>
                            <h4 class="info-title">Awesome Design</h4>
                            <p class="description">Gain access to the demographics, psychographics, and location of unique people.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="info info-primary">
                            <div class="icon icon-white">
                                <i class="tim-icons icon-user-run"></i>
                            </div>
                            <h4 class="info-title">Fast Development</h4>
                            <p class="description">Gain access to the demographics, psychographics, and location of unique people.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info info-primary">
                            <div class="icon icon-white">
                                <i class="tim-icons icon-bulb-63"></i>
                            </div>
                            <h4 class="info-title">Super Fresh</h4>
                            <p class="description">Gain access to the demographics, psychographics, and location of unique people.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- PROJETOS -->

<div class="projects-2 project-raised">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ml-auto mr-auto text-center mb-5">
                <h2 class="title">Nossos Projetos</h2>
                <div class="section-space"></div>
            </div>
        </div>
        <ul class="nav nav-pills nav-pills-primary nav-pills-icons nav-pills-lg" role="tablist">
            <li class="nav-item m-auto">
                <a class="nav-link active" data-toggle="tab" href="#project1" role="tablist">
                    <i class="tim-icons icon-spaceship"></i> BV128
                </a>
            </li>
            <li class="nav-item m-auto">
                <a class="nav-link" data-toggle="tab" href="#project2" role="tablist">
                    <i class="tim-icons icon-bag-16"></i> Urban 95
                </a>
            </li>
            <li class="nav-item m-auto">
                <a class="nav-link" data-toggle="tab" href="#project3" role="tablist">
                    <i class="tim-icons icon-light-3"></i> Project 3
                </a>
            </li>

        </ul>
        <div class="tab-content tab-space">
            <div class="tab-pane active" id="project1">
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-image h-auto">
                                <img class="img rounded" src="https://lh6.googleusercontent.com/JOUv-FaQvKhwjFn0hOa2OIDpgw1hYbfxj5WsQQIfvTPej6-nATjR58tRKKDPxf_KmiD08rNN=w16383">
                            </div>
                            <div class="card-body text-left">
                                <div class="card-footer mt-0">
                                    <div class="stats stats-right">
                                        <div class="stars text-warning">
                                            <i class="tim-icons icon-shape-star"></i>
                                            <i class="tim-icons icon-shape-star"></i>
                                            <i class="tim-icons icon-shape-star"></i>
                                            <i class="tim-icons icon-shape-star"></i>
                                            <i class="tim-icons icon-shape-star"></i>
                                        </div>
                                    </div>
                                    <div class="author">
                                        {{-- <img src="assets/img/Tim.png" alt="..." class="avatar img-raised"> --}}
                                        <span>Material Kit</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-image h-auto">
                                <img class="img rounded" src="https://lh5.googleusercontent.com/4mREjDerz9_-AvFUgKysPjj7gsNS3qFEsP8BLkrGS739f9P72S8rvEB3lKMai9pUK4M544Q_PdWBxjtpErdETR17DdtPf1tn26OJr2D4GzjeSgSjIzM=w371">
                            </div>
                            <div class="card-body text-left">
                                <div class="card-footer mt-0">
                                    <div class="stats stats-right">
                                        <i class="tim-icons icon-heart-2 text-danger"></i> 127
                                    </div>
                                    <div class="author">
                                        {{-- <img src="assets/img/Tim.png" alt="..." class="avatar img-raised"> --}}
                                        <span>Argon Dashboard Pro</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="project2">
                <div class="space-100"></div>
                <div class="col-md-8 ml-auto mr-auto text-center mt-4">
                    <p class="description mb-5">Add your information here for Project2.</p>
                </div>
                <div class="space-100"></div>
            </div>
            <div class="tab-pane" id="project3">
                <div class="space-100"></div>
                <div class="col-md-8 ml-auto mr-auto text-center mt-4">
                    <p class="description mb-5">Add your information here for Project3.</p>
                </div>
                <div class="space-100"></div>
            </div>
            <div class="tab-pane" id="project4">
                <div class="space-100"></div>
                <div class="col-md-8 ml-auto mr-auto text-center mt-4">
                    <p class="description mb-5">Add your information here for Project4.</p>
                </div>
                <div class="space-100"></div>
            </div>
            <div class="tab-pane" id="project5">
                <div class="space-100"></div>
                <div class="col-md-8 ml-auto mr-auto text-center mt-4">
                    <p class="description mb-5">Add your information here for Project5.</p>
                </div>
                <div class="space-100"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center mt-4">
                <h3 class="title">Interested in our projects?</h3>
                <h4 class="description mb-5">This is the paragraph where you can write more details about your projects. Keep you user engaged by providing meaningful information.</h4>
                <button class="btn btn-primary btn-lg">Contact us</button>
            </div>
        </div>
    </div>
</div>


@endsection
