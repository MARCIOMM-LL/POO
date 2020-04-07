<?php

require_once "ContaCorrente.php";

$contaJoao = new ContaCorrente("Joao", "1212", "342234-2", 1000.00);

echo $contaJoao->setNumero("44444");

$contaJoao->sacar(200,00)->depositar(300,00);

#var_dump($contaJoao);