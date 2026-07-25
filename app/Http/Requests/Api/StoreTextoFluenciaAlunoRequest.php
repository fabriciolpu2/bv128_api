<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class StoreTextoFluenciaAlunoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'aluno_id' => ['required', 'integer', 'exists:pgsql.alunos,id'],
            'texto_fluencia_id' => ['required', 'integer', 'exists:pgsql.texto_fluencia,id'],
            'nota' => ['nullable', 'numeric'],
            'tempo' => ['nullable', 'integer'],
            'velocidade' => ['nullable', 'numeric'],
            'palavras_nao_lidas' => ['nullable', 'string'],
            'audio' => ['nullable', 'file', 'mimetypes:audio/mpeg,audio/mp3,audio/wav,audio/x-wav,audio/aac,audio/ogg,audio/mp4,audio/webm', 'max:20480'],
        ];
    }
}
