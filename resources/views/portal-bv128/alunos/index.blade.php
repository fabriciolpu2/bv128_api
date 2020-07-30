@extends('admin.layouts.dashboard.app')

@section('content')

@include('cliente.layouts.headers.aulas')

<div class="projects-3">
    <div class="container">
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>matricula</th>
                        <th>nome</th>
                        <th>pontuação</th>
                        <th>Missões concluidas</th>
                        <th>Escola</th>
                        <th>Turma</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alunos as $aluno)
                    <tr>
                        <td>{{$aluno->matricula}}</td>
                        <td>{{$aluno->nome}}</td>
                        <td>{{$aluno->pontuacao}}</td>
                        <td>{{$aluno->missoes_concluidas}}</td>
                        <td>{{$aluno->turma->escola->nome}}</td>
                        <td>{{$aluno->turma->nome}}</td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
            {{-- {{ $alunos->links() }} --}}
    </div>
</div>
@endsection
