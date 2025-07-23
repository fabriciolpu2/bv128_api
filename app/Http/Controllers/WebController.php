<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function site()
    {
        return view("site.site");
    }

    public function financeiro()
    {
        return view("financeiro");
    }

    public function aulas()
    {
        return view("cliente.aulas.index");
    }

    public function adesivos()
    {
        $adesivos = DB::table('alunos')->whereNotNull('login')->get();
        return view('site.adesivos', compact('adesivos', $adesivos));
    }

    public function sobre()
    {
        return view('site.sobre');
    }

    public function bv128()
    {
        return view('site.bv128');
    }

    public function makunaima()
    {
        return view('site.makunaima');
    }

    public function eleanor()
    {
        return view('site.eleanor');
    }
}
