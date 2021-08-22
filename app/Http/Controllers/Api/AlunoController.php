<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use App\Models\AlunoHistorico;
use App\Models\AlunoRespostas;
use App\Models\Configuracao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AlunoController extends Controller
{


    public function listaVersao($versaoLocal)
    {
        $alunos = Aluno::where('versao', '>', $versaoLocal)->get();
        return json_encode($alunos);
    }

    public function index() {
        $alunos = Aluno::all();
        return json_encode($alunos);
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
    public function recompensasAluno(Request $request){
        //$recompensa = DB::table('recompensas_aluno')->insert(['aluno_id'=>1,'recompensa_id'=>1, 'recompensa_tipo'=>'album']);
        

        $input = $request->all();
        // $r = $input['Items'];
        // return response()->json([
        //     'data' => $r,
        //     'message' => 'sucesso'
        //     ], 200);

        foreach ($input['Items'] as $item) {
            $recompensa = DB::table('recompensas_aluno')->where('aluno_id', $item['aluno_id'])->first();

            //$historico = AlunoHistorico::where('aluno_id', $aluno['aluno_id'])->first();
            if($recompensa) {
                //$historico->update($aluno);
                continue;
                // return response()->json([
                //     'data' => $recompensa,
                //     'message' => 'ja está cadastrado'
                //     ], 200);
            } else {
                $recompensa = DB::table('recompensas_aluno')->insert([
                    'aluno_id'          =>  $item['aluno_id'],
                    'recompensa_id'     =>  $item['recompensa_id'], 
                    'recompensa_tipo'   =>  $item['recompensa_tipo'],
                    'created_at'        =>  Carbon::now(),
                    'updated_at'        =>  Carbon::now(),
                ]);
                
            }
            
        }
        return response()->json([
            'data' => $input['Items'],
            'message' => 'sucesso111'
            ], 201);
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
