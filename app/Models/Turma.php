<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    //
    protected $table = 'turmas';
    protected $fillable = ['nome', 'escola_id', 'turno', 'professor_id'];
    
    //public $with = ['escola'];
    public function escola()
    {
        return $this->belongsTo(Escola::class);
    }

    public function professor()
    {
        return $this->hasOne('App\User', 'id', 'professor_id');
    }
    public function alunos()
    {
        return $this->hasMany('App\Models\Aluno', 'turma_id', 'id');
    }
}
