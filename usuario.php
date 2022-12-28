<?php

$email = 'vinicius@microsoft.com.br';
$senha = 'áéúç';
$posicaoDoArroba = strpos($email, '@');

if(mb_strlen($senha) < 8){
    echo 'senha insegura' . PHP_EOL;
}
$usuario = substr($email,0,$posicaoDoArroba);
echo strtoupper($usuario) . PHP_EOL;
echo substr($email,$posicaoDoArroba + 1) . PHP_EOL;