<?php

namespace App\Models;

use App\Traits\Blameable;
use Illuminate\Database\Eloquent\Model;
//use YourAppRocks\EloquentUuid\Traits\HasUuid;

class Servico extends Model
{

    use Blameable;

    //protected $uuidColumnName = 'id';

    const ZAFAZ = 'zafaz';

    protected $fillable = [
        'titulo',
        'descricao',
        'icon',
        'ativo',
        'color',
        'superior_id',
        'destaque'

    ];

    public function isActive()
    {
        return $this->ativo ?? false ;
    }

    /**
     * retorna os servicos superiores
     */
    public function scopeSuperior($query)
    {
        return $query->where('superior_id', '')->get();

    }

    public function servico()
    {
        return $this->belongsTo(Servico::class, 'superior_id');
    }

    public function subServicos()
    {
        return $this->hasMany(Servico::class, 'superior_id');
    }
}
