<?php 

function geraEmail($nome): void{
    $conteudoEmail = <<<FINAL

    Olá, $nome!

    Estamos estrando em contato para 
    {motivo do contato}

    {assinatura}
    
    FINAL;

    echo $conteudoEmail;

}

geraEmail();