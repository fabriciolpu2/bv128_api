<?php

namespace App\Http\Controllers\Api;

use App\Models\Questoes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestoesController extends Controller
{
    public function listaVersao($versaoLocal)
    {
        $questoes = Questoes::where('versao', '>', $versaoLocal)->get();
        return json_encode($questoes);
    }

    public function index() {
        $questoes = Questoes::all();
        return json_encode($questoes);
    }
    
}
