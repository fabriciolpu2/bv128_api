<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use Illuminate\Http\Request;
use Auth;

class TurmaController extends Controller
{
    public function listaVersao($versaoLocal)
    {
        $turmas = Turma::where('versao', '>', $versaoLocal)->get();
        return response()->json($turmas);
    }

    public function index()
    {
        $turmas = Turma::all();
        return response()->json($turmas);
    }

    public function minhasTurmas()
    {
        $turmas = Turma::paginate();
        return view('portal-bv128/turmas/minhas-turmas', compact('turmas'));
    }

    public function alunos(Turma $turma)
    {
        $alunos = $turma->alunos()->with(['recompensas', 'questionarios'])->paginate();
        return view('portal-bv128/turmas/alunos', compact('alunos', 'turma'));
    }
}
