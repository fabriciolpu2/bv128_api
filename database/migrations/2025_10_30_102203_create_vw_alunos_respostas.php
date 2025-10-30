<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateVwAlunosRespostas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("drop view if exists vw_alunos_respostas;");
        $sql = 'CREATE OR REPLACE VIEW vw_alunos_respostas AS
                WITH tmp_alunos AS (
                    SELECT
                        a.id,
                        a.nome
                    FROM
                        alunos a
                ),
                tmp_questoes AS (
                    SELECT
                        q.id,
                        q.titulo,
                        q.descricao,
                        q.questionario_id
                    FROM
                        questoes q
                ),
                tmp_respostas AS (
                    SELECT
                        r.id,
                        r.descricao
                    FROM
                        alternativas_questoes r
                ),
                tmp_resultado AS (
                    SELECT
                        ta.id,
                        ta.nome,
                        tq.titulo,
                        tr.id AS resposta_id,
                        tr.descricao,
                        ar.correta,
                        ar.created_at,
                        tq.questionario_id,
                        tq.descricao as descricao_questao
                    FROM
                        aluno_respostas ar
                        JOIN tmp_alunos ta ON ta.id = ar.aluno_id
                        JOIN tmp_questoes tq ON tq.id = ar.questao_id
                        JOIN tmp_respostas tr ON tr.id = ar.resposta_id
                )
                SELECT
                    tr.id,
                    tr.nome,
                    tr.questionario_id,
                    json_agg(
                        json_build_object(
                            \'titulo\', tr.titulo,
                            \'descricao\', tr.descricao,
                            \'correta\', tr.correta,
                            \'created_at\', to_char(tr.created_at, \'DD/MM/YYYY\'),
                            \'descricao_questao\', tr.descricao_questao
                        )
                        ORDER BY tr.created_at
                    ) AS respostas
                FROM
                    tmp_resultado tr
                GROUP BY
                    tr.id,
                    tr.questionario_id,
                    tr.nome;';

        DB::statement($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("drop view if exists vw_alunos_respostas;");
    }
}
