<?php

$nome = "Raquel Ribeiro";

$email = "raquel@alura.com.br";
$senha = "123";

echo strlen($senha) . PHP_EOL;

if(strlen($senha) < 8){
    echo "Senha insegura" . PHP_EOL;
}

$posicãoDoArroba = strpos($email, "@");

$usuario = substr($email, 0, $posicãoDoArroba);


echo strtolower($usuario) . PHP_EOL;

echo substr($email, $posicãoDoArroba + 1) . PHP_EOL;

list($nome, $sobrenome) = explode(' ', $nome);

echo 'Nome: ', $nome . PHP_EOL;
echo 'Sobrenome: ', $sobrenome . PHP_EOL;

$cvs = "Raquel Ribeiro, 24, raquel@alura.com.br";
var_dump(explode(','), $cvs);

echo trim($email, '') . PHP_EOL;
 