<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

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
}
