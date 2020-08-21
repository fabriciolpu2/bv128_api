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
        return json_encode($turmas);
    }

    public function index()
    {
        $turmas = Turma::all();
        return json_encode($turmas);
    }

    public function minhasTurmas()
    {
        $turmas = Auth::user()->turmas()->latest()->paginate();
        return view('portal-bv128/turmas/minhas-turmas', compact('turmas'));
    }
<<<<<<< HEAD
    public function alunos($turma){
        $alunos = Turma::find($turma)->alunos->fresh('historico');
        //dd($alunos);
        return view('portal-bv128/alunos/index', compact('alunos'));
=======

    public function alunos(Turma $turma)
    {
        $alunos =$turma->alunos()->paginate();

        return view('portal-bv128/turmas/alunos', compact('alunos', 'turma'));
>>>>>>> d245b3ea9fa6dd0fbb74bf5be991227157673993
    }
}
