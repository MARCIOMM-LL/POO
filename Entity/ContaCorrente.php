<?php

class ContaCorrente
{
    private $titular;
    private $agencia;
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
        Validacao::verificaNumerico($valor);
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
        Validacao::verificaNumerico($valor);
        $this->saldo = $this->saldo + $valor;
        return $this;
    }

    #Métodos mágicos começam com 2 underlines
    public function __get($atributo)
    {
        Validacao::protegeAtributo($atributo);
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        Validacao::protegeAtributo($atributo);
        $this->$atributo = $valor;
    }

    private function formataSaldo()
    {
        return "R$ " . number_format($this->saldo, 2,",",".");
    }

    public function getSaldo()
    {
        return $this->formataSaldo();
    }

    #A declaração ContaCorrente, está dizendo 
    #que o parametro $contaCorrente 
    #é uma instancia da classe ContaCorrente
    public function transferir(float $valor, ContaCorrente $contaCorrente)
    {
        Validacao::verificaNumerico($valor);
        $this->sacar($valor);
        $contaCorrente->depositar($valor);
        return $this;
    }

}
