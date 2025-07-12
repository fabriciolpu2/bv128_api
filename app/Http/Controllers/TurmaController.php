<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use Illuminate\Http\Request;
use Auth;

class TurmaController extends Controller
{
    public function listaVersao($versaoLocal)
    {
        $turmas = $this->cache('turmas-versao-local', function () use ($versaoLocal) {
            return Turma::where('versao', '>', $versaoLocal)->get();
        });
        return response()->json($turmas);
    }

    public function index()
    {
        $turmas = $this->cache('todas-as-turmas', function () {
            return Turma::all();
        });
        return response()->json($turmas);
    }

    public function minhasTurmas()
    {
        $turmas = $this->cache('minhas-turmas', function () {
            return Turma::paginate();
        });
        return view('portal-bv128/turmas/minhas-turmas', compact('turmas'));
    }

    public function alunos(Turma $turma)
    {
        $alunos = $turma->alunos()->with('recompensas')->paginate();
        return view('portal-bv128/turmas/alunos', compact('alunos', 'turma'));
    }
}
