<?php

function geraEmail(string $nome): void{
    $conteudoEmail = <<<FIM
    Olá, $nome!

    Estamos entrando em contato para 
    {motivo do contato}
    
    {assinatura};
    FIM;
    echo $conteudoEmail;
}

echo geraEmail('Vinicius Rodrigues Camargo');
