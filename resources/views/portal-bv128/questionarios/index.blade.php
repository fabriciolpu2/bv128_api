@extends('admin.layouts.dashboard.app')

@section('content')
<div class="row">
    <div class="col-lg-5 col-md-7 mr-auto text-left mt-5">
        <h1 class="title">Lista de Questionários</h1>
        <h6 class="category">Aqui está a lista dos questionários do portal BV-128</h6>
        <br>

    </div>
</div>

<div style="margin-top: 30px">
    <div class="container">
        <div class="col-12 justify-content-center">
            <div class="row">
                @foreach ($questionarios as $questionario)
                <div class="col d-flex justify-content-around">
                    <div class="card text-center" style="width: 18rem;">
                        <img class="card-img-top" src="https://1.bp.blogspot.com/-HiiLWX6QdDM/W6lCk6oW9GI/AAAAAAAAFsA/Jf5lv6zPnqEmAsguFf-HjFYwR_Ha9biLwCLcBGAs/w1200-h630-p-k-no-nu/Fazenda%2BBoa%2BVista.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$questionario->fase}}</h5>
                            <p class="card-text"></p>
                            <a href="{{route('questoes.lista', $questionario)}}" class="btn btn-primary">Abrir</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            
        </div>
    </div>
</div>

@endsection
