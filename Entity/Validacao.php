<?php

class Validacao
{
    #Um método privado é um método que só pertence à classe
    #onde foi criado.$this->protegeAtributo($atributo);$this->protegeAtributo($atributo);
    public static function protegeAtributo($atributo)
    {
        if($atributo == "titular" || $atributo == "saldo")
        {
            #return false;
            throw new   Exception("O atributo $atributo é privado e não pode se visualizado.");
        }
    }

    public static function verificaNumerico($valor)
    {
        if(!is_numeric($valor))
        {
            echo "O valor passado não é um número";
            exit;
        }
    }


}