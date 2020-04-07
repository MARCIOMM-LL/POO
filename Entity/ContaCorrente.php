<?php

class ContaCorrente
{
    private $titular;
    public $agencia;
    private $numero;
    private $saldo;

    public function __construct($titular, $agencia, $numero, $saldo)
    {
        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    public function sacar($valor)
    {
        $this->saldo = $this->saldo - $valor;

        #É uma boa prática retornar a própria classe com 
        #"return $this" em uma classe que contém métodos 
        #que não retornam nada. Isso é bom para encadiar métodos
        # como nesse exemplo abaixo
        #$object = new Class_Name();
        #$object->setField1($value1)->setField2($value2)->setField3($value3); 
        return $this;
    }

    public function depositar($valor)
    {
        $this->saldo = $this->saldo + $valor;
        return $this;
    }

    public function getTitular()
    {
        return $this->titular;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setNumero($numero)
    {
        return $this->numero = $numero;
    }

}