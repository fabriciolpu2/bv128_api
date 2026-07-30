<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class TextoFluenciaAluno extends Model
{
    protected $table = 'texto_fluencia_aluno';
    const CREATED_AT = null;
    const UPDATED_AT = null;
    const DISCO = 'texto_fluencia_privado';
    protected $fillable = [
        'aluno_id', 'texto_fluencia_id', 'nota', 'tempo', 'velocidade', 'palavras_nao_lidas', 'audio', 'updated_at'
    ];

    public function getAudioUrlAttribute()
    {
        if (!$this->audio || !Storage::disk(self::DISCO)->exists($this->audio)) {
            return null;
        }

        return route('textos-fluencia.audio', $this->id);
    }

    public function textoFluencia()
    {
        return $this->belongsTo(TextoFluencia::class, 'texto_fluencia_id');
    }

    public function aluno()
    {
        return $this->belongsTo(Aluno::class, 'aluno_id');
    }
}
