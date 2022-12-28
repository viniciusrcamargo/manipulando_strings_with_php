<?php

$nome = 'Vinícius Rodrigues';
$email = 'vinicius@microsoft.com.br';
$senha = 'áéúç';


$posicaoDoArroba = strpos($email, '@');

echo mb_strlen($senha);

if(mb_strlen($senha) < 8){
    echo 'senha insegura' . PHP_EOL;
}
$usuario = substr($email,0,$posicaoDoArroba);
echo strtoupper($usuario) . PHP_EOL;
echo substr($email,$posicaoDoArroba + 1) . PHP_EOL;

list($nome, $sobrenome) = explode(' ', $nome);
echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;

$csv = 'Vinicius Rodrigues, 37, vinicius@gmail.com';
var_dump(explode(',', $csv));
//explode separa string em array separada por separador estabelecido