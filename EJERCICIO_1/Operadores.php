<?php

class operadoresAritmeticos
{
    public $numero1;
    public $numero2;
    public $numero3;

    public function __construct($num1, $num2, $num3)
    {
        $this->numero1 = $num1;
        $this->numero2 = $num2;
        $this->numero3 = $num3;
        
    }

    public function Sumar()
    {
        echo $this->numero1 . " + " . $this->numero2 . " + " . $this->numero3 . " = ";
        $total = $this->numero1 + $this->numero2;;
        return $total;
    }

}

$resultado = new operadoresAritmeticos(40,25,35);
echo $resultado->Sumar();
?>