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
    public function historico(Request $request){
        $input = $request->all();
        $r = $input['Items'];
        foreach ($input['Items'] as $aluno) {
            $historico = AlunoHistorico::where('aluno_id', $aluno['aluno_id'])->first();
            if($historico) {
                $historico->update($aluno);
            } else {
                AlunoHistorico::create($aluno);
            }
            
        }
        $config = Configuracao::where('model', 'historico')->increment('versao');

        return response()->json([
            'alunos' => $input,
            'message' => 'sucesso'
            ], 200);
    }
    public function alunosQuestoes(Request $request){
        $input = $request->all();
        $r = $input['Items'];
        foreach ($input['Items'] as $item) {
            $res = AlunoRespostas::where('aluno_id', $item['aluno_id'])->where('resposta_id', $item['resposta_id'])->first();
            if($res) {
                $res->update($item);
            } else {
                AlunoRespostas::create($item);
            }
            
        }
        $config = Configuracao::where('model', 'alunos_respostas')->increment('versao');

        return response()->json([
            'alunos' => $input,
            'message' => 'sucesso'
            ], 200);
    }
    
}
