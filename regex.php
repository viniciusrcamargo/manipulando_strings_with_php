<?php

$telefones = ['(24) 9999-9999', '(18) 99598 - 9878', '(19) 23211 - 2233'];


foreach ($telefones as $telefone){
    $telefoneValido = preg_match('/\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}/', $telefone, $correspondencia);
    if($telefoneValido){
        echo 'Telefone válido ' . PHP_EOL;
    }else{
        echo 'Telefone inválido' . PHP_EOL;
    }
}
