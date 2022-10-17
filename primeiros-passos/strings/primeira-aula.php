<?php 

$nome = 'Raquel Ribeiro';

$ehDaMinhaFamilia = str_contains($nome, 'Ribeiro');

if($ehDaMinhaFamilia){
    echo "$nome é da minha familia" . PHP_EOL;
} else {
    echo "$nome não é da minha familia" . PHP_EOL;
}