<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
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
        $clientes = $status != null ? Cliente::where('ativo', $status)->paginate(20) : Cliente::paginate(20);

        return view('clientes.index', compact('clientes', 'status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
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
            'image' => 'mimes:jpeg,jpg,png'


        ], [
            'nome.required' => 'Informe o nome do cliente',
            'nome.min' => 'Informe um nome com mais de 3 caracteres',
            'nome.max' => 'Nome excede a quantidade de caracteres',
            'image.mimes' => 'Tipo de arquivo não suportado'
        ]);


        $filename = $request->image->getRealPath();
        $ext = $request->image->getClientOriginalExtension();
        $hash = md5(time() . $filename . $ext);

        $cliente = Cliente::create($request->except(['image']));


        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $cliente->addMediaFromRequest('image')
                ->usingName($hash)
                ->usingFileName($hash . '.' . $ext)
                ->withCustomProperties(['name' => $hash . '.' . $ext])
                ->toMediaCollection('images');
        }

        return redirect('/backend/clientes')->with(['success' => 'Successfully created client']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($cliente)
    {
        try {

            $cliente = Cliente::findOrFail($cliente);
        } catch (\Throwable $th) {
            throw $th;
        }
        return view('clientes.create', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cliente)
    {
        try {

            $cliente = Cliente::findOrFail($cliente);
        } catch (\Throwable $th) {
            throw $th;
        }


        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $cliente->clearMediaCollection('images');

            $filename = $request->image->getRealPath();
            $ext = $request->image->getClientOriginalExtension();
            $hash = md5(time() . $filename . $ext);

            $cliente->addMediaFromRequest('image')
                ->usingName($hash)
                ->usingFileName($hash . '.' . $ext)
                ->withCustomProperties(['name' => $hash . '.' . $ext])
                ->toMediaCollection('images');
        }

        $cliente->update($request->except(['image']));

        return redirect('/backend/clientes')->with(['success' => 'Event updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($cliente)
    {
        try {

            $cliente = Cliente::findOrFail($cliente);
        } catch (\Throwable $th) {
            throw $th;
        }

        $cliente->delete();

        return back()->with('success', 'Deleted Record successfully.');
    }
}
