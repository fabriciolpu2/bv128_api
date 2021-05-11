<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recompensas extends Model
{
    protected $table = 'recompensas';
    protected $fillable = ['tipo', 'descricao', 'imagem', 'valor'];

    protected $with = ['eventoHistorico'];

    public function eventoHistorico()
    {
        return $this->belongsTo(EventoHistorico::class, 'id', 'recompensa_id');
    }
}
