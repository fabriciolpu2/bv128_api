<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questionario extends Model
{
    protected $table = 'questionarios';
    protected $fillable = ['fase', 'versao'];
    
    public function questoes()
    {
        return $this->hasMany(Questoes::class, 'questionario_id', 'id');
    }
}
