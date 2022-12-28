<?php

$nome = " Vinicius Rodrigues Camargo Lauziano Nazareno da Silva ";
$csv = '.,Santos, Deus, Anjos, 33,.';
//echo $nome . PHP_EOL;
//echo trim($nome);

//remove espaço ou pontos informados das pontas
echo trim($csv, '.,') . PHP_EOL;
echo ltrim($csv, '.,') . PHP_EOL;
echo rtrim($csv, '.,') . PHP_EOL;
echo $csv;
