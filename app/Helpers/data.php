<?php

use App\Models\Configuracao;

if (!function_exists('configuracoes')) {
    function configuracoes()
    {
        return \Illuminate\Support\Facades\Cache::remember('configuracoes', 24 * 60 * 7, function () {
            return Configuracao::all();
        });
    }
}
