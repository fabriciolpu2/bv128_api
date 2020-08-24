<?php

namespace App\Http\Controllers\Api;

use App\Models\Turma;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class TurmaController extends Controller
{
    public function listaVersao($versaoLocal)
    {
        $turmas = Turma::where('versao', '>', $versaoLocal)->get();
        return json_encode($turmas);
    }

    public function index()
    {
        $turmas = Turma::all();
        return json_encode($turmas);
    }
}
