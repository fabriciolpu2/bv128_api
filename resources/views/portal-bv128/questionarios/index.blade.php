@extends('admin.layouts.dashboard.app')

@section('content')
<div style="margin-top: 100px">
    <div class="container">
        <div class="col-12 justify-content-center">
            <div class="row">
                @foreach ($questionarios as $q)
                <div class="col d-flex justify-content-around">
                    <div class="card text-center" style="width: 18rem;">
                        <img class="card-img-top" src="https://1.bp.blogspot.com/-HiiLWX6QdDM/W6lCk6oW9GI/AAAAAAAAFsA/Jf5lv6zPnqEmAsguFf-HjFYwR_Ha9biLwCLcBGAs/w1200-h630-p-k-no-nu/Fazenda%2BBoa%2BVista.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$q->fase}}</h5>
                            <p class="card-text"></p>
                            <a href="{{route('questoes.lista', ['id'=> $q->id])}}" class="btn btn-primary">Abrir</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            
        </div>
    </div>
</div>

@endsection
