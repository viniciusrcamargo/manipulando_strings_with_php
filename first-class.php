<?php

$nome = "Vinicius Rodrigues Camargo";

$eDaFamilia = str_contains($nome,'Santos');

if($eDaFamilia){
    echo $nome . " é da minha família";
}else{
    echo $nome . " não é da minha família";
}
