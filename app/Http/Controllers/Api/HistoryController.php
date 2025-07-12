<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HistoryController extends Controller
{
    public function __invoke()
    {
        for ($i = 1100; $i < 1141; $i++) {
            DB::table('aluno_historicos')->insert([
                'id' => $i,
                'aluno_id' => $i,
                'missoes_concluidas' => 0,
                'versao' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
