<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TextoFluencia extends Model
{
    protected $table = 'texto_fluencia';
    public $timestamps = false;
    protected $fillable = ['titulo', 'texto', 'dificuldade'];
}
