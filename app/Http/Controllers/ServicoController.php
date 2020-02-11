<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Carbon\Laravel\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServicoController extends Controller
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

        $servicos = $status !== null ? Servico::where('ativo', $status)->paginate(8) : Servico::paginate(8);

        return view('servicos.index', compact('servicos', 'status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $superiores = Servico::all()->where('superior_id', '');

        return view('servicos.create', compact('superiores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if (!$request->has('destaque')) {
            $request->merge(['destaque' => 0]);
        } else {
            $request->merge(['destaque' => 1]);
        }



        $this->validate($request, [
            'titulo' => 'required|string|min:3|max:255',
            'descricao' => 'max:1000',

        ], [
            'titulo.required' => 'Informe o titulo',
            'titulo.min' => 'Informe um titulo com mais de 3 caracteres',
            'titulo.max' => 'Titulo excede a quantidade de caracteres',
            'descricao.required' => 'Informe a descricao',
            'descricao.min' => 'Informe uma descricao com mais de 10 caracteres',
            'descricao.max' => 'Titulo excede a quantidade de caracteres',
        ]);


        Servico::create($request->all());


        return redirect('/backend/servicos')->with(['success' => 'Successfully created service']);
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
        try {

            $servico = Servico::findOrFail($id);
        } catch (\Throwable $th) {
            throw $th;
        }

        $superiores = Servico::all()->where('superior_id', '');

        return view('servicos.create', compact('servico', 'superiores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $servico)
    {
        try {

            $servico = Servico::findOrFail($servico);
        } catch (\Throwable $th) {
            throw $th;
        }

        if (!$request->has('destaque')) {
            $request->merge(['destaque' => 0]);
        } else {
            $request->merge(['destaque' => 1]);
        }

        $servico->update($request->all());

        return redirect('/backend/servicos')->with(['success' => 'Updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servico = Servico::findOrFail($id);

        $servico->delete();

        return back()->with('success', 'Deleted Record successfully.');
    }
}
