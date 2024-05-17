<?php

abstract class Vehiculo
{
    protected string $matricula;
    protected string $marca;
    protected string $modelo;

    /**
     * @param string $matricula
     * @param string $marca
     * @param string $modelo
     */
    public function __construct(string $matricula, string $marca, string $modelo)
    {
        $this->matricula = $matricula;
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function getMatricula(): string
    {
        return $this->matricula;
    }

    public function setMatricula(string $matricula): void
    {
        $this->matricula = $matricula;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function setMarca(string $marca): void
    {
        $this->marca = $marca;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    abstract public function getData();

    public function __toString(){
        $info = "Matricula: " . $this->matricula . "\n";
        $info .= "Marca: " . $this->marca . "\n";
        $info .= "Modelo: " . $this->modelo . "\n";
        return  $info;
    }


}