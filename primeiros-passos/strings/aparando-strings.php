<?php 

$csv = ',Raquel Ribeiro,20';

echo trim($csv, ',.') . PHP_EOL;
echo ltrim($csv, ',.') . PHP_EOL; //A função ltrim vai remover o espaço do início da string, mas não do final
echo rtrim($csv, ',.') . PHP_EOL; 