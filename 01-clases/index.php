<?php
/*
//Definir una clase (un "molde" para crear instancias o objetos)
class Coche
{
    //atributos o propiedades (variables)
    private $color = "Rojo";
    private $marca = "Ferrari";
    private $modelo = "Testarosa";

    private $velocidad = 0;
    private $velocidad_max = 3;

    private $potencia = 500;
    private $plazas = 2;

    //Métodos, funciones o acciones
    public function getColor()
    {
        return $this->color;
    }
    public function setColor(string $color)
    {
        $this->color = $color;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function acelerar()
    {
        if ($this->velocidad < $this->velocidad_max) {
            $this->velocidad++;
        }
    }
    public function frenar()
    {
        if ($this->velocidad > 0) {
            $this->velocidad--;
        }
    }
    public function getVelocidad()
    {
        return $this->velocidad;
    }
}

//Crear un objeto o una instáncia de la clase
$coche = new Coche();

echo $coche->getColor();
echo '<br>';
echo $coche->setColor("Rosa");
echo '<br>';
echo "El color del coche es " . $coche->getColor() . "<br>";

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();
$coche->acelerar(); //deberia ir a 4
// $coche->velocidad = 100000;
echo "El coche va a " . $coche->getVelocidad();
// var_dump($coche);
$coche2 = new Coche();
$coche2->setColor("Amarillo");
$coche2->setModelo("TestaYellow");


echo "<hr>";
echo "El " . $coche->getModelo()
    . " es de color " . $coche->getColor()
    . " y va a " . $coche->getVelocidad();
echo "<hr>";
echo "El " . $coche2->getModelo()
    . " es de color " . $coche2->getColor()
    . " y va a " . $coche2->getVelocidad();
*/