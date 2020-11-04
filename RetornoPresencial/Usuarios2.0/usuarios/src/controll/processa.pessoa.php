<?php
    require("../domain/pessoa.php");
    header("Content-type: application/json");

   /* $p1 = new Pessoa();

    $p1->setIdPessoa(1);
    $p1->setNome("André Silva");
    $p1->setTelefone("19 7070-7070");

    
    echo $p1->getIdPessoa()."<br>";
    echo $p1->getNome()."<br>";
    echo $p1->getTelefone()."<br>";*/

    $pessoas = [];

    $pessoa = new Pessoa();
    $pessoa->setIdPessoa(1);
    $pessoa->setNome("Jair Silva");
    $pessoa->setTelefone("19 80790-6456");
    $pessoas[0] = $pessoa;

    $pessoa = new Pessoa();
    $pessoa->setIdPessoa(2);
    $pessoa->setNome("Maria Silva");
    $pessoa->setTelefone("19 73837-2908");
    $pessoas[1] = $pessoa;

    $pessoa = new Pessoa();
    $pessoa->setIdPessoa(3);
    $pessoa->setNome("Senhor Myagi");
    $pessoa->setTelefone("19 55154-2145");
    $pessoas[2] = $pessoa;

    foreach($pessoas as $p){
        echo $p->getIdpessoa()." ";
        echo $p->getNome()." ";
        echo $p->getTelefone()."<br>";

    }

    echo json_encode($pessoas);




    
    