<?php

$notasBimestre1 = [
    'raquel' => 10,
    'vitor' => 6,
    'kaique' => 8,
    'larissa' => 5,
    'rafael' => 4,

];

$notasBimestre2 = [
    'vitor' => 6,
    'kaique' => 8,
    'larissa' => 5,
    'rafael' => 4,

];

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos));
var_dump(array_flip($alunosFaltantes));
