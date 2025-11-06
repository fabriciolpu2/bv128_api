<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVwDetalheAlunosTable extends Migration
{
    public function up(): void
    {
        DB::statement("drop view if exists vw_detalhe_alunos;");
        $sql = 'create or replace view vw_detalhe_alunos as
                WITH acertos_por_questionario AS (
                        SELECT
                            ar.aluno_id,
                            qn.id AS questionario_id,
                            qn.fase,
                            COUNT(*) FILTER (WHERE ar.correta = true) AS acertos
                        FROM questionarios qn
                        JOIN questoes qt ON qt.questionario_id = qn.id
                        JOIN aluno_respostas ar ON ar.questao_id = qt.id
                        GROUP BY ar.aluno_id, qn.id, qn.fase
                    ), aluno AS (
                        SELECT
                            a.id,
                            a.nome,
                            t.escola_id,
                            e.nome AS escola_nome,
                            t.nome AS turma,
                            t.turno
                        FROM alunos a
                        LEFT JOIN turmas t ON t.id = a.turma_id
                        LEFT JOIN escolas e ON e.id = t.escola_id
                    ),
                    recompensas AS (
                        SELECT
                            ra.aluno_id,
                            jsonb_agg(
                                jsonb_build_object(
                                    \'id\', r.id,
                                    \'descricao\', r.descricao,
                                    \'imagem\', (SELECT value FROM configuracaos WHERE key = \'base.files_url\') || \'/\' || r.imagem,
                                    \'data_conquista\', to_char(ra.created_at, \'DD/MM/YYYY\')
                                )
                            ) AS recompensas
                        FROM recompensas_aluno ra
                        JOIN recompensas r ON r.id = ra.recompensa_id
                        GROUP BY ra.aluno_id
                    )
                    SELECT
                        al.id AS aluno_id,
                        al.nome AS aluno_nome,
                        al.escola_nome,
                        al.turma,
                        al.turno,
                        COALESCE(
                            jsonb_agg(
                                jsonb_build_object(
                                    \'fase\', apq.fase,
                                    \'acertos\', apq.acertos,
                                    \'questionario_id\', apq.questionario_id
                                )
                                ORDER BY apq.questionario_id
                            ) FILTER (WHERE apq.aluno_id IS NOT NULL),
                            \'[]\'::jsonb
                        ) AS questionarios,
                        CASE
                            WHEN COUNT(apq.acertos) > 0
                                THEN ROUND((SUM(apq.acertos)::numeric / COUNT(apq.questionario_id)), 2)
                            ELSE NULL
                        END AS media_acertos,
                        COALESCE(rp.recompensas, \'[]\'::jsonb) AS recompensas
                    FROM aluno al
                    LEFT JOIN acertos_por_questionario apq ON apq.aluno_id = al.id
                    LEFT JOIN recompensas rp ON rp.aluno_id = al.id
                    GROUP BY
                        al.id,
                        al.nome,
                        al.escola_nome,
                        al.turma,
                        al.turno,
                        rp.recompensas;';
        DB::statement($sql);
    }

    public function down(): void
    {
        DB::statement("drop view if exists vw_detalhe_alunos;");
    }
}
