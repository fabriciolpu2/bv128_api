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
    public function alunoss() {
        return $this->hasMany('recompensas_aluno');
    }
    public function alunos()
    {
        return $this->belongsToMany(Aluno::class, 'recompensas_aluno', 'recompensa_id','aluno_id');
    }
}
