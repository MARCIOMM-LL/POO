<?php

class ContaCorrente
{
    public $titular;
    public $agencia;
    public $numero;
    public $saldo;

    public function __construct($titular, $agencia, $numero, $saldo)
    {
        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

}