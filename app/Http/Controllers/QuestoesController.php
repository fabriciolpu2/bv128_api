<?php

namespace App\Http\Controllers;

use App\Models\Questoes;
use Illuminate\Http\Request;

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
