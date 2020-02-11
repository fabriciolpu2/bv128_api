<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Filial;
use App\Models\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    /**
     * Show the application landing.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        $clientes = Cliente::all();

        // $servicos = Servico::all()->where('titulo', 'not like', '%ZAFAZ%');
        $servicos = Servico::where('titulo', 'not like', '%'.Servico::ZAFAZ.'%')->where('superior_id', null)->get();

        $zafaz = Servico::where('titulo', 'like', '%'.Servico::ZAFAZ.'%')->first();

        //dd($zafaz->subServicos);

        $filiais = Filial::orderBy('ordem')->get();

        return view('welcome', compact('clientes', 'filiais', 'servicos', 'zafaz'));
    }
}
