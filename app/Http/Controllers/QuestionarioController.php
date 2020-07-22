<?php

namespace App\Http\Controllers;

use App\Models\Questionario;
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
