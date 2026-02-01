<?php

use Illuminate\Database\Seeder;

class DescritoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('descritores')->insertOrIgnore([
            [
                'codigo' => 'D1',
                'descricao' => 'Localizar informações explícitas em um texto.',
                'slug' => 'd1',
                'serie' => '5 ano',
            ],
            [
                'codigo' => 'D2',
                'descricao' => 'Estabelecer relações entre partes de um texto, identificando repetições ou substituições que contribuem para a continuidade de um texto.',
                'slug' => 'd2',
                'serie' => '5 ano',
            ],
            [
                'codigo' => 'D3',
                'descricao' => 'Inferir o sentido de uma palavra ou expressão.',
                'slug' => 'd3',
                'serie' => '5 ano',
            ],
            [
                'codigo' => 'D4',
                'descricao' => 'Inferir uma informação implícita em um texto.',
                'slug' => 'd4',
                'serie' => '5 ano',
            ],
            [
                'codigo' => 'D5',
                'descricao' => 'Interpretar texto com auxílio de material gráfico diverso (propagandas, quadrinhos, foto etc.).',
                'slug' => 'd5',
                'serie' => '5 ano',
            ],
            [
                'codigo' => 'D6',
                'descricao' => 'Identificar o tema de um texto.',
                'slug' => 'd6',
                'serie' => '5 ano',
            ],
            [
                'codigo' => 'D7',
                'descricao' => 'Identificar o conflito gerador do enredo e os elementos que constroem a narrativa.',
                'slug' => 'd7',
                'serie' => '5 ano',
            ],
            [
                'codigo' => 'D8',
                'descricao' => 'Estabelecer relação causa/consequência entre partes e elementos do texto.',
                'slug' => 'd8',
                'serie' => '5 ano',
            ],
            [
                'codigo' => 'D9',
                'descricao' => 'Identificar a finalidade de textos de diferentes gêneros.',
                'slug' => 'd9',
                'serie' => '5 ano',
            ],
            [
                'codigo' => 'D10',
                'descricao' => 'Identificar as marcas linguísticas que evidenciam o locutor e o interlocutor de um texto.',
                'slug' => 'd10',
                'serie' => '5 ano',
            ],
            [
                'codigo' => 'D11',
                'descricao' => 'Distinguir um fato da opinião relativa a esse fato.',
                'slug' => 'd11',
                'serie' => '5 ano',
            ],
            [
                'codigo' => 'D12',
                'descricao' => 'Estabelecer relações lógico-discursivas presentes no texto, marcadas por conjunções, advérbios etc.',
                'slug' => 'd12',
                'serie' => '5 ano',
            ],
            [
                'codigo' => 'D13',
                'descricao' => 'Identificar efeitos de ironia ou humor em textos variados.',
                'slug' => 'd13',
                'serie' => '5 ano',
            ],
            [
                'codigo' => 'D14',
                'descricao' => 'Identificar o efeito de sentido decorrente do uso da pontuação e de outras notações.',
                'slug' => 'd14',
                'serie' => '5 ano',
            ],
            [
                'codigo' => 'D15',
                'descricao' => 'Reconhecer diferentes formas de tratar uma informação na comparação de textos que tratam do mesmo tema, em função das condições em que ele foi produzido e daquelas em que será recebido.',
                'slug' => 'd15',
                'serie' => '5 ano',
            ],
        ]);
    }
}
