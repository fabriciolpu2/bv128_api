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
        if ($audio) {
            $dados['audio'] = $this->armazenarAudio($audio);
        }

        return TextoFluenciaAluno::create($dados);
    }

    private function armazenarAudio(UploadedFile $audio): string
    {
        $nomeArquivo = uniqid() . '.' . File::extension($audio->getClientOriginalName());

        return Storage::disk(self::DISCO)->putFileAs('', $audio, $nomeArquivo);
    }
}
