<?php

namespace App\Http\Controllers;

use App\Models\Configuracao;
use Illuminate\Http\Request;

class ConfiguracaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Configuracao  $configuracao
     * @return \Illuminate\Http\Response
     */
    public function show($model)
    {
        $configuracao = Configuracao::where('model', $model)->first();
        return json_encode($configuracao);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Configuracao  $configuracao
     * @return \Illuminate\Http\Response
     */
    public function edit(Configuracao $configuracao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Configuracao  $configuracao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Configuracao $configuracao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Configuracao  $configuracao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Configuracao $configuracao)
    {
        //
    }
}
