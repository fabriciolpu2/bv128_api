<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questoes extends Model
{
    protected $table = 'questoes';
    protected $fillable = ['questionario_id', 'valor', 'titulo', 'descricao', 'ano', 'contexto_historico', 'versao'];
    
    protected $with = ['respostas'];
    public function questionario()
    {
        return $this->belongsTo(Questionario::class);
    }
    public function respostas()
    {
        return $this->hasMany(AlternativasQuestoes::class, 'questao_id', 'id');
    }
}
