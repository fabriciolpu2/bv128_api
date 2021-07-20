<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\AlunoHistorico;
use App\Models\AlunoRespostas;
use App\Models\Configuracao;
use Illuminate\Http\Request;
use Auth;

class AlunoController extends Controller
{
    public function listaVersao($versaoLocal)
    {
        $alunos = Aluno::where('versao', '>', $versaoLocal)->get();
        return json_encode($alunos);
    }

    public function index() {
        //$professor = Auth::user()->turmas;
        //dd($professor[0]->alunos);
        $alunos = Aluno::paginate(15);
        //dd($alunos);
        return view('portal-bv128/alunos/index', compact('alunos'));
    }
    public function alunosTurma() {
        //$professor = Auth::user()->turmas;
    }
    public function show($id)
    {
        $aluno = Aluno::find($id);
        $aluno['recompensas'] = $aluno->recompensas;

        $aluno['turma'] = $aluno->turma;
        $aluno['respostas'] = $aluno->respostas;
        //dd($aluno);

        return view('portal-bv128/alunos/show', compact('aluno'));
    }

    
    
}
