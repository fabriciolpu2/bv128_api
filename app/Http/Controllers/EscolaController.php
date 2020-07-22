<?php

namespace App\Http\Controllers;

use App\Models\Escola;
use Illuminate\Http\Request;

class EscolaController extends Controller
{
    
    public function listaVersao($versaoLocal)
    {
        $escolas = Escola::where('versao', '>', $versaoLocal)->get();
        return json_encode($escolas);
    }

    public function index() {
        $escolas = Escola::all();
        return json_encode($escolas);
    }

    
}
