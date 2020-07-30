<?php

namespace App\Http\Controllers;

use App\Models\Questionario;
use App\Models\Questoes;
use App\Models\AlternativasQuestoes;
use Illuminate\Http\Request;

class QuestionarioController extends Controller
{
    public function listaVersao($versaoLocal)
    {
        $questionarios = Questionario::where('versao', '>', $versaoLocal)->get();
        return json_encode($questionarios);
    }
    
    public function index() {
        $questionarios = Questionario::all();
        return json_encode($questionarios);
    }

    public function questionarios() {
        $questionarios = Questionario::all();
        return view('portal-bv128/questionarios/index', compact('questionarios'));
    }
    public function questoes($id) {
        $questoes = Questionario::find($id)->questoes;
        //dd($questoes);
        return view('portal-bv128/questoes/index', compact('questoes', 'id'));
    }
    public function questoesCreate($id) {
        return view('portal-bv128/questoes/create', compact('id'));
    }
    public function questoesStore(Request $request, $id) {
        $inputs = $request->all();
        $inputs['questionarioID'] = $id;
        // foreach ($inputs['respostas'] as $resposta) {
        //     $resposta['versao'] = 1;
        // }
        //dd($inputs['respostas']);
        $respostas = [];
        foreach ($inputs['respostas'] as $resposta) {
            $respostas[] = new AlternativasQuestoes($resposta);
        }
        $questao = Questoes::create($inputs);
        $respostas[0]['correta'] = true;
        $questao->respostas()->saveMany($respostas);
        return \redirect(route('questoes.lista', $id));
        
    }
}
