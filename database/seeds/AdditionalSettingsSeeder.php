<?php

use App\Models\Configuracao;
use Illuminate\Database\Seeder;

class AdditionalSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'key' => 'login.background',
                'value' => 'login/background.png',
                'versao' => '1',
                'model' => 'configuracao'
            ],
            [
                'key' => 'base.url',
                'value' => config('app.url'),
                'versao' => '1',
                'model' => 'configuracao'
            ],
            [
                'key' => 'base.files_url',
                'value' => config('filesystems.disks.public.url'),
                'versao' => '1',
                'model' => 'configuracao'
            ],
        ];
        foreach ($data as $item) {
            Configuracao::firstOrCreate([
                'key' => $item['key'],
                'versao' => $item['versao'],
            ], $item);
        }
    }
}
