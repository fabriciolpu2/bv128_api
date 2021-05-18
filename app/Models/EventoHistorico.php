<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventoHistorico extends Model
{
    protected $table = 'eventos_historicos';
    protected $fillable = ['tipo', 'titulo', 'descricao', 'contexto_historico', 'imagem', 'audio', 'data', 'cenario', 'fixo', 'posicao_vector3', 'recompensa_id'];


    public function recompensa()
    {
        return $this->hasOne(Recompensas::class, 'recompensa_id', 'id');
    }
}
