<?php

namespace App\Services;

use App\Models\TextoFluenciaAluno;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class TextoFluenciaService
{
    const DISCO = 'texto_fluencia_privado';

    public function salvarResultado(array $dados, ?UploadedFile $audio): TextoFluenciaAluno
    {
        //cria ou atualiza
        return TextoFluenciaAluno::updateOrCreate([
            'aluno_id' => $dados['aluno_id'],
            'texto_fluencia_id' => $dados['texto_fluencia_id'],
        ], $dados);
    }

    public function armazenarAudio(UploadedFile $audio): string
    {
        $nomeArquivo = $audio->getClientOriginalName();
        return Storage::disk(self::DISCO)->putFileAs('', $audio, $nomeArquivo);
    }
}
