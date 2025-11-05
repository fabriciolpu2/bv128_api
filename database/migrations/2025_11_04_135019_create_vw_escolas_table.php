<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVwEscolasTable extends Migration
{
    public function up(): void
    {
        DB::statement("drop view if exists vw_escolas;");
        $sql = "create or replace view vw_escolas as
                WITH tmp_escolas AS (
                    SELECT * FROM escolas
                ),
                tmp_turmas AS (
                    SELECT * FROM turmas
                ),
                tmp_alunos AS (
                    SELECT * FROM alunos
                )
                SELECT
                    e.id AS escola_id,
                    e.nome AS escola,
                    COUNT(DISTINCT t.id) AS total_turmas,
                    COUNT(a.id) AS total_alunos
                FROM tmp_escolas e
                LEFT JOIN tmp_turmas t
                    ON t.escola_id = e.id
                LEFT JOIN tmp_alunos a
                    ON a.turma_id = t.id
                GROUP BY e.id, e.nome
                ORDER BY e.id;";
        DB::statement($sql);
    }

    public function down(): void
    {
        DB::statement("drop view if exists vw_escolas;");
    }
}
