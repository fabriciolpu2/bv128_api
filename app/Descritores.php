<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Descritores extends Model
{
    protected $table = 'descritores';

    protected $fillable = [
        'codigo',
        'descricao',
        'slug',
        'serie'
    ];
}
