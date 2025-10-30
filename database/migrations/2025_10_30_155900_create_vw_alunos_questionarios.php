<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVwAlunosQuestionarios extends Migration
{
    public function up(): void
    {
        DB::statement("drop view if exists vw_alunos_questionarios;");
        $sql = 'CREATE OR REPLACE VIEW vw_alunos_questionarios AS
                WITH acertos_por_questionario AS (
                SELECT
                    ar.aluno_id,
                    qn.id AS questionario_id,
                    qn.fase,
                    COUNT(*) FILTER (WHERE ar.correta = true) AS acertos
                FROM
                    questionarios qn
                JOIN questoes qt ON qt.questionario_id = qn.id
                JOIN aluno_respostas ar ON ar.questao_id = qt.id
                GROUP BY
                    ar.aluno_id, qn.id, qn.fase
            )
            SELECT
                a.aluno_id,
                json_agg(
                    jsonb_build_object(
                        \'questionario_id\', a.questionario_id,
                        \'fase\', a.fase,
                        \'acertos\', a.acertos
                    ) ORDER BY a.questionario_id
                ) AS questionarios
            FROM
                acertos_por_questionario a
            GROUP BY
                a.aluno_id;';
        DB::statement($sql);
    }

    public function down(): void
    {
        DB::statement("drop view if exists vw_alunos_questionarios;");
    }
}
