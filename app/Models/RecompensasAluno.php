<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecompensasAluno extends Model
{
    protected $table = 'recompensas_aluno';
    protected $fillable = ['aluno_id', 'recompensa_id', 'recompensa_tipo', 'created_at', 'updated_at'];

}
