<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Escola extends Model
{
    //
    protected $table = 'escolas';
    protected $fillable = ['nome'];

    /**
     * @return HasMany
     */
    public function turmas(): HasMany
    {
        return $this->hasMany(Turma::class, 'escola_id', 'id');
    }

    public function alunos()
    {
        return $this->hasManyThrough(Aluno::class, Turma::class, 'escola_id', 'turma_id', 'id', 'id');
    }

}
