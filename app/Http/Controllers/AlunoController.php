<?php

namespace App\Http\Controllers;

use App\AlunoQuestionarioView;
use App\AlunoRespostaView;
use App\Models\Aluno;
use App\Models\AlunoHistorico;
use App\Models\AlunoRespostas;
use App\Models\Configuracao;
use App\Models\Views\VwDetalheAluno;
use Illuminate\Http\Request;
use Auth;

class AlunoController extends Controller
{
    public function listaVersao($versaoLocal)
    {
        $alunos = Aluno::where('versao', '>', $versaoLocal)->get();
        return json_encode($alunos);
    }

    public function index()
    {
        $alunos = Aluno::with('questionarios')->paginate(15);
        return view('portal-bv128/alunos/index', compact('alunos'));
    }

    public function alunosTurma()
    {
        //$professor = Auth::user()->turmas;
    }

    public function show($id)
    {
//        $aluno = Aluno::find($id);
//        $aluno['recompensas'] = $aluno->recompensas;
//
//        $aluno['turma'] = $aluno->turma;
//        $aluno['respostas'] = $aluno->respostas;
        //dd($aluno);
        $aluno = VwDetalheAluno::firstWhere('aluno_id', $id);
        if (!$aluno) {
            return back()->with('error', 'Aluno não encontrado');
        }
        //dd($aluno);

        return view('portal-bv128/alunos/show', compact('aluno'));
    }

    public function listaQuestionarios($id)
    {
        try {

            $questionarios = AlunoQuestionarioView::where('aluno_id', (int)$id)->first();
            if (!$questionarios) {
                return back()->with('error', 'Aluno não possui questionários');
            }
            return view('portal-bv128/alunos/questionarios', compact('questionarios'));
        } catch (\Exception $exception) {
            return back();
        }
    }

    public function questionarios($id, $questionario_id)
    {
        try {
            $questionario = AlunoRespostaView::where('questionario_id', (int)$questionario_id)
                ->where('id', (int)$id)
                ->first();

            if (!$questionario) {
                return back();
            }

            return view('portal-bv128/alunos/respostas', compact('questionario'));
        } catch (\Exception $exception) {
            return back();
        }
    }
}
