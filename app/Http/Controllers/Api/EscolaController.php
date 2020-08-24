<?php

namespace App\Http\Controllers\Api;

use App\Models\Escola;
use App\Http\Controllers\Controller;
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
