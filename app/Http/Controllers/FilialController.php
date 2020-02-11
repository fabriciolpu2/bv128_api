<?php

namespace App\Http\Controllers;

use App\Models\Filial;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;

class FilialController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($status = null)
    {
        $filiais = $status != null ? Filial::where('ativo', $status)->paginate(8) : Filial::paginate(8);

        return view('filiais.index', compact('filiais', 'status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('filiais.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required|string|min:3|max:255',
            'ordem' => 'required|int|min:1|max:1000|unique:filiais',
            'email' => 'unique:filiais',
            'contato_1' => 'required',
            'cidade' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
            'image' => 'mimes:jpeg,jpg,png'


        ], [
            'nome.required' => 'Informe o titulo',
            'nome.min' => 'Informe um nome com mais de 3 caracteres',
            'nome.max' => 'Nome excede a quantidade de caracteres',
            'ordem.required' => 'Informe a ordem em que a filial será mostrada',
            'contato_1.required' => 'Informe o telefone de contato',
            'ordem.int' => 'Insira um numero inteiro',
            'cidade.required' => 'Informe a cidade',
            'estado.required' => 'Informe o estado',
            'image.mimes' => 'Tipo de arquivo não suportado'
        ]);

        $filial = Filial::create($request->except(['image']));

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $filename = $request->image->getRealPath();
            $ext = $request->image->getClientOriginalExtension();
            $hash = md5(time() . $filename . $ext);




            $filial->addMediaFromRequest('image')
                ->usingName($hash)
                ->usingFileName($hash . '.' . $ext)
                ->withCustomProperties(['name' => $hash . '.' . $ext])
                ->toMediaCollection('images');
        }

        return redirect('/backend/filiais')->with(['success' => 'Successfully created service']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Filial  $filial
     * @return \Illuminate\Http\Response
     */
    public function show(Filial $filial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Filial  $filial
     * @return \Illuminate\Http\Response
     */
    public function edit($filial)
    {
        try {

            $filial = Filial::findOrFail($filial);
        } catch (\Throwable $th) {
            throw $th;
        }
        return view('filiais.create', compact('filial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Filial  $filial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $filial)
    {
        try {

            $filial = Filial::findOrFail($filial);
        } catch (\Throwable $th) {
            throw $th;
        }


        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $filial->clearMediaCollection('images');

            $filename = $request->image->getRealPath();
            $ext = $request->image->getClientOriginalExtension();
            $hash = md5(time() . $filename . $ext);

            $filial->addMediaFromRequest('image')
                ->usingName($hash)
                ->usingFileName($hash . '.' . $ext)
                ->withCustomProperties(['name' => $hash . '.' . $ext])
                ->toMediaCollection('images');
        }

        $filial->update($request->except(['image']));

        return redirect('/backend/filiais')->with(['success' => 'Event updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Filial  $filial
     * @return \Illuminate\Http\Response
     */
    public function destroy($filial)
    {
        try {

            $filial = Filial::findOrFail($filial);
        } catch (\Throwable $th) {
            throw $th;
        }

        $filial->delete();

        return back()->with('success', 'Deleted Record successfully.');
    }
}
