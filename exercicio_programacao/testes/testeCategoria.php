<?php

require '../models/Categoria.php';

 //teste

    //Criando sem construct
    $cl = new Categoria();
    $cl->setId(1);
    $cl->setNome("Teste");
    $cl->setDescricao("Objeto bla bla");
    var_dump($cl);

    //Criando com construct

    $c2 = new Categoria(2, "Categoria 2", "Teste");
    var_dump($c2);