<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questoes extends Model
{
    protected $table = 'questoes';
    protected $fillable = ['questionarioID', 'valor', 'titulo', 'descricao', 'ano', 'contexto_historico', 'versao'];
    
    public function questionario()
    {
        return $this->belongsTo(Questionario::class);
    }
    public function respostas()
    {
        return $this->hasMany(AlternativasQuestoes::class);
    }
}
