<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreTextoFluenciaAlunoRequest;
use App\Models\TextoFluencia;
use App\Models\TextoFluenciaAluno;
use App\Services\TextoFluenciaService;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class TextoFluenciaController extends Controller
{
    private $service;

    public function __construct(TextoFluenciaService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $textos = TextoFluencia::all();
        return response()->json($textos, 200);
    }

    public function store(StoreTextoFluenciaAlunoRequest $request)
    {
        try {
            $dados = $request->validated();
            foreach ($dados['Items'] as $dado) {
                $dado['updated_at'] = $dado['update_at'] ?? null;
                $this->service->salvarResultado($dado, $request->file('audio'));
            }

            return response()->json([
                'message' => 'sucesso'
            ]);
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return response()->json([
                'error' => 'Houve um erro na api'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function downloadAudio(TextoFluenciaAluno $textoFluenciaAluno)
    {
        if (!$textoFluenciaAluno->audio) {
            return response()->json([
                'error' => 'Este registro não possui áudio'
            ], Response::HTTP_NOT_FOUND);
        }

        $disco = Storage::disk(TextoFluenciaService::DISCO);

        if (!$disco->exists($textoFluenciaAluno->audio)) {
            return response()->json([
                'error' => 'Arquivo de áudio não encontrado'
            ], Response::HTTP_NOT_FOUND);
        }

        return $disco->download($textoFluenciaAluno->audio);
    }
}
