<?php

namespace App\Http\Controllers;

use App\Models\EventoHistorico;
use App\Models\Recompensas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class EventoHistoricoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = EventoHistorico::paginate(15);
        //dd($eventosHistoricos);
        return view('portal-bv128/eventos/index', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recompensas = Recompensas::all();
        return view('portal-bv128/eventos/create', compact('recompensas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();


        $imagem = $request->file('imagem');
        $img_file = uniqid().'.'.File::extension($imagem->getClientOriginalName());
        $inputs['imagem'] = 'storage/evento_historico/'.$inputs['cenario'].'/'.$img_file;
        $imagem_ = Storage::disk('bv128')->put($inputs['cenario'].'/'.$img_file,  File::get($imagem));


        $audio = $request->file('audio');
        $audio_file = uniqid().'.'.File::extension($audio->getClientOriginalName());
        $inputs['audio'] = 'storage/evento_historico/'.$inputs['cenario'].'/'.$audio_file;
        $audio_ = Storage::disk('bv128')->put($inputs['cenario'].'/'.$audio_file,  File::get($audio));
        $evento = EventoHistorico::create($inputs);
        
        return redirect()->route('eventos.index')->with('success', 'Evento ' . $evento->descricao . ' criado com sucesso !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EventoHistorico  $eventosHistoricos
     * @return \Illuminate\Http\Response
     */
    public function show(EventoHistorico $eventosHistoricos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EventoHistorico  $eventosHistoricos
     * @return \Illuminate\Http\Response
     */
    public function edit(EventoHistorico $eventosHistoricos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EventoHistorico  $eventosHistoricos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EventoHistorico $eventosHistoricos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EventoHistorico  $eventosHistoricos
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventoHistorico $eventosHistoricos)
    {
        //
    }
}
