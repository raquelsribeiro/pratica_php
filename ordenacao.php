<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vini',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 6,
    ],

];

function ordenaNotas(array $nota, array $nota2): int {
    return $notas2['nota'] <=> $nota1['nota'];
}

usort($notas, 'ordenaNotas');
var_dump($notas);