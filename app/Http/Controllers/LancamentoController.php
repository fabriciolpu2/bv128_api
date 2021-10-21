<?php

namespace App\Http\Controllers;

use App\Models\Lancamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brick\Money\Money;

class LancamentoController extends Controller
{
    //

    public function store(Request $request)
    {
        $inputs = $request->all();
        DB::beginTransaction();
        try {
            if ($inputs['operacao'] == 'd') {
                $inputs['valor'] *= -1;
            }
            $lancamento = Lancamento::create([
                'data_lancamentos' => $inputs['data_lancamentos'],
                'num_documento' => $inputs['num_documento'],
                'operacao' => $inputs['operacao'],
                'tipo_id' => $inputs['tipo_id'],
                'conta_id' => $inputs['conta_id'],
                'valor' => str_replace('.', ',', $inputs['valor'])

            ]);
            DB::commit();
            return response()->json('sucesso', 200);
        } catch (\Throwable $th) {
            throw $th;
            DB::rollBack();
            return response()->json([
                'erro' => $th,
                'message' => 'erro ao salvar'
            ]);
        }
    }

    public function saldo()
    {
        $saldo = Lancamento::sum('valor');
        $values = ['R$',  '.'];
        $saldo = str_replace($values, '', $saldo);
        return response()->json(trim(str_replace(',', '.', $saldo)));
    }
}
