<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'materiais';
    
    // na versao final deverao ter, controle de arquivos

    protected $fillable = [
        'descricao', 'mime', 'path'
    ];


    public function aula()
    {
        return $this->hasOne(Aula::class, 'material_id');
    }
}
