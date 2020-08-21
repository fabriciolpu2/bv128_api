<?php

namespace App\Http\Controllers;

use App\Model\Aula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aulas = Aula::latest()->paginate();

        return view('portal-bv128.aulas.index', compact('aulas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portal-bv128.aulas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->all();
        
        $validator = Validator::make($attributes, [
            'nome' => ['required', 'string', 'unique:aulas,nome'],
            'descricao' => ['required', 'string', 'min:10', 'max:200'],
            'corpo' => ['required', 'string', 'max:600'],
            'imagem' => ['required']
        ]);

        if ($validator->fails()) {
            return redirect()->route('aulas.create')->withErrors($validator)->withInput();
        }

        $attributes['thumb'] = $this->makeThumb($attributes['imagem']);
        // dd($attributes);
        $aula = Aula::create($attributes);

        return redirect()->route('aulas.index')->with('success', 'Aula ' . $aula->nome . ' cadastrada com sucesso !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aula = Aula::findOrFail($id);
        return view('portal-bv128.aulas.edit', compact('aula'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aula = Aula::findOrFail($id);

        $attributes = $request->all();
        
        $validator = Validator::make($attributes, [
            'nome' => ['required', 'string', "unique:aulas,nome,$aula->id"],
            'descricao' => ['required', 'string', 'min:10', 'max:200'],
            'corpo' => ['required', 'string', 'max:600'],
            'imagem' => ['required']
        ]);

        if ($validator->fails()) {
            return redirect()->route('aulas.create')->withErrors($validator)->withInput();
        }

        $attributes['thumb'] = $this->makeThumb($attributes['imagem']);

        $aula->update($attributes);
        
        $aula->save();

        return redirect()->route('aulas.index')->with('success', 'Aula ' . $aula->nome . ' editada com sucesso !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aula = Aula::findOrFail($id);

        $aula->delete();

        return redirect()->route('aulas.index')->with('success', 'Aula ' . $aula->nome . ' deletada com sucesso !');

    }


    /**
     * Seta o caminho da thumbnail da notícia
     */
    public function makeThumb($img)
    {
        $thumbnail = explode('/', $img);

        $directory = dirname($img);

        $thumbnail = $directory . '/thumbs/' . end($thumbnail);

        return $thumbnail;
    }
}
