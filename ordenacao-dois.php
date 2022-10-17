<?php

$notas = [
    'raquel' => 10,
    'vitor' => 6,
    'kaique' => 8,
    'larissa' => 5,
    'rafael' => 4,

];

krsort($notas);
var_dump($notas);

if(is_array($notas)){
    echo 'Sim, é um array' . PHP_EOL;
}

var_dump(array_is_list($notas));

echo "Raquel fez  a prova:" .PHP_EOL;
var_dump(isset($notas['Raquel']));

echo "Alguém tirou 10?" .PHP_EOL;
var_dump(in_array(10, $notas, true));

echo "Quel tirou 10?" .PHP_EOL;
var_dump(array_search(10, $notas, true));