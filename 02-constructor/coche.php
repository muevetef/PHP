<?php
class Coche
{
    //atributos o propiedades (variables)
    private $color;
    private $marca;
    private $modelo;
    private $plazas;
    private $velocidad = 0;
    private $velocidad_max = 3;
    private $potencia = 500;

    public function __construct($color, $marca, $modelo, $plazas)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->plazas = $plazas;
    }

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
    public function getVelocidad()
    {
        return $this->velocidad;
    }
    //TODO añadir getters y setters
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

    //TODO método que imprima la información del coche
    //formateada en html
    public function mostrarInfo(){
        return ""
    }
}
