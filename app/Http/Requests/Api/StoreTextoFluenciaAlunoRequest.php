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
            'Items' => ['required', 'array', 'min:1'],
            'Items.*.aluno_id' => ['required', 'integer', 'exists:pgsql.alunos,id'],
            'Items.*.texto_fluencia_id' => ['required', 'integer', 'exists:pgsql.texto_fluencia,id'],
            'Items.*.nota' => ['nullable', 'numeric'],
            'Items.*.tempo' => ['nullable', 'integer'],
            'Items.*.velocidade' => ['nullable', 'numeric'],
            'Items.*.palavras_nao_lidas' => ['nullable', 'string'],
            'Items.*.audio' => 'nullable|string',
            "Items.*.update_at" => 'nullable',
        ];
    }
}
