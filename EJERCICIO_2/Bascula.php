<?php
abstract class Bascula
{
    public $precioxLibraCarne = 4.50;
    public $precioxLibraEmbutidos = 2.50;
    public $precioLibraPollo = 2.75;

    abstract public function pesarCarne();
    abstract public function pesarEmbutido();
    abstract public function pesarPollo();
}

class Pesaje extends Bascula
{
    public $peso;

    public function __construct($_peso)
    {
        $this->peso = $_peso;
    }

    function pesarCarne()
    {
        $cantidad = $this->peso * $this->precioxLibraCarne;
        return $cantidad;
    }

    function pesarEmbutido()
    {
        $cantidad = $this->peso * $this->precioxLibraEmbutidos;
        return $cantidad;
    }

    function pesarPollo()
    {
        $cantidad = $this->peso * $this->precioLibraPollo;
        return $cantidad;
    }
}

$carne = new Pesaje(1,3);
echo $carne->pesarCarne();


?>