<?php

namespace App\Http\Controllers;

use App\Models\Escola;
use App\Models\Views\VwEscolas;
use Illuminate\Http\Request;

class EscolaController extends Controller
{

    public function listaVersao($versaoLocal)
    {
        $escolas = Escola::where('versao', '>', $versaoLocal)->get();
        return json_encode($escolas);
    }

    public function index()
    {
        $escolas = Escola::all();
        return json_encode($escolas);
    }

    public function listaEscolas()
    {
        try {
            $escolas = VwEscolas::paginate();
            return view('portal-bv128.escolas.escolas', compact('escolas'));
        } catch (\Exception $exception) {
            \Log::error($exception->getMessage());
            return back()->with('error', 'Erro ao listar escolas');
        }
    }

    public function show(Escola $escola)
    {
        try {
            $data = $escola->load(['turmas', 'alunos']);
            return view('portal-bv128.escolas.show', compact('data'));
        } catch (\Exception $exception) {
            \Log::error($exception->getMessage());
            return back()->with('error', 'Erro ao listar escolas');
        }
    }

}
