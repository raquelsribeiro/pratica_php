<?php

$alunos2021 = [
    'raquel',
    'vitor',
    'kaique',
    'larissa',
    'rafael',

];

$novosAlunos = [
    'Daiana',
    'Elisa',
    'Emanoel',
    'Carlos',
];

$alunos2022 = array_merge($alunos2021, $novosAlunos);

var_dump($alunos2022);