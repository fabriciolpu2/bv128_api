<?php

use App\Models\Configuracao;
use Illuminate\Database\Seeder;

class RecompensaPadraoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Configuracao::firstOrCreate([
            'key' => 'recompensa.padrao'
        ], [
            'key' => 'recompensa.padrao',
            'value' => '0',
            'model' => 'recompensas',
            'versao' => 1
        ]);
    }
}
