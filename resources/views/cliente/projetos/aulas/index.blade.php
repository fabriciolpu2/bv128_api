<div class="cd-section" id="projects">
    <div class="projects-3">

        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center mb-5">
                    {{-- <h6 class="category text-muted">3º ANO ENSINO FUNDAMENTAL - HISTÓRIA</h6> --}}
                    <h2 class="title mt-0">Planos de Aula</h2>
                </div>
            </div>
            <div class="space-50"></div>
            <div class="row">
                @forelse ($aulas as $aula)
                <div class="col-md-6">
                    <div class="card card-blog card-plain">
                        <div class="card-header">
                            <h2 class="title">{{$aula->nome}}</h2>
                            {{-- aqui pode conter uma previa da quantidade de arquivos ou algo do genero --}}
                            {{-- <span class="badge badge-danger">VR</span>
                            <span class="badge badge-info">Leitura</span> --}}
                        </div>
                        <div class="card-image">
                            <a href="javascript:;">
                                <img class="img rounded img-raised" src="{{$aula->thumb}}">
                            </a>
                        </div>
                        <div class="card-footer text-left">
                            <div class="author">
                                <a class="btn btn-success btn-round btn-simple" href="{{ route('publico.aula.show', $aula) }}">
                                    <i class="tim-icons icon-single-copy-04"></i> Saiba Mais
                                </a>
                                {{-- <button class="btn btn-primary btn-round btn-simple" data-toggle="modal"
                                    data-target="#myModal2">
                                    <i class="tim-icons icon-single-copy-04"></i> Boa Leitura
                                </button> --}}
                            </div>
                        </div>
                    </div>
                </div>

                @empty

                @endforelse


                {{-- 
                <div class="col-md-6">
                    <div class="card card-blog card-plain">
                        <div class="card-header">
                            <h2 class="title">História - Aula 2</h2>
                            <span class="badge badge-success">Leitura</span>
                        </div>
                        <div class="card-image">
                            <a href="javascript:;">
                                <img class="img rounded img-raised" src="/cliente/images/aula02.png">
                            </a>
                        </div>
                        <div class="card-footer text-left">
                            <div class="author">
                                <a href="#" target=""> Estamos Trabalhando</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="space-50"></div>

        </div>
    </div>
</div>