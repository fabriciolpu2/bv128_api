<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $table = 'aulas';

    // na versao final deverao ter, thumbnail(imagem), titulo_aula

    protected $guarded = [];

    public function materiais()
    {
        return $this->hasMany(Material::class, 'aula_id');
    }
}
