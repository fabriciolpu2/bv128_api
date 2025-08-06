<?php

namespace App\Http\Controllers\Api;

use App\CacheTrait;
use App\Http\Controllers\Controller;
use App\Models\Recompensas;

class RecompensaController extends Controller
{
    use CacheTrait;

    public function index($versao)
    {
        return $this->cache('todas-as-recompensas', function () {
            $recompensas = Recompensas::all();
            return $recompensas->map(function ($recompensa) {
                return [
                    'id' => $recompensa->id,
                    'tipo' => $recompensa->tipo,
                    'descricao' => $recompensa->descricao,
                    'imagem' => $recompensa->imagem,
                    'valor' => $recompensa->valor,
                ];
            });
        });
    }
}
