<?php

namespace App\Http\Controllers\Api;

use App\Models\AlternativasQuestoes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlternativasQuestoesController extends Controller
{
    public function listaVersao($versaoLocal)
    {
        $alternativas = AlternativasQuestoes::where('versao', '>', $versaoLocal)->get();
        return json_encode($alternativas);
    }

    public function index() {
        $alternativas = AlternativasQuestoes::all();
        return json_encode($alternativas);
    }
    
}
