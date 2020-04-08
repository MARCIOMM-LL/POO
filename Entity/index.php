<?php
#Exibição de erros
ini_set('display_errors', 1);
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');

require_once "Validacao.php";
require_once "ContaCorrente.php";


#Objetos da Classe
$contaJoao = new ContaCorrente("Joao", "1212", "342234-2", 1000);
$contaMaria = new ContaCorrente("maria", "1212", "342234-2", 1000);

#$contaJoao->sacar(200,00)->depositar(300,00);

#echo $contaJoao;

#echo $contaJoao->atributo = "João";

#echo $contaJoao->getSaldo();

#$contaJoao->transferir(20.00, $contaMaria);

#var_dump($contaJoao);
#var_dump($contaMaria);

#Aque temos um métodos estático que serve 
#para a acessar métodos ou atributos de uma 
#classe sem a necessidade de criar um objeto/instância da classe
#Validacao::protegeAtributo('saldo');