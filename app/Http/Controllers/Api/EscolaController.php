<?php

namespace App\Http\Controllers\Api;

use App\Models\Escola;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EscolaController extends Controller
{

    public function listaVersao($versaoLocal)
    {
        $escolas = $this->cache('escolas-por-versao', function () use ($versaoLocal) {
            return Escola::where('versao', '>', $versaoLocal)->get();
        }, 26 * 60 * 7);
        return response()->json($escolas);
    }

    public function index()
    {
        $escolas = $this->cache('todas-as-escolas', function () {
            return Escola::all();
        });
        return response()->json($escolas);
    }


}
