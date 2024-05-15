<?php
/*
crear una clase Persona con los siguientes atributos
nombre
apellidos
altura
edad

con su constructor y getters y setters

métodos: hablar y caminar
*/

class Persona
{
    protected $nombre;
    private $apellidos;
    private $altura;
    public $edad;

    public function __construct($nombre, $apellidos, $altura, $edad)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->altura = $altura;
        $this->edad = $edad;
    }
    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellidos
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     *
     * @return  self
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     *
     * @return  self
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get the value of edad
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    public function hablar()
    {
        return "bla bla bla...";
    }

    public function caminar()
    {
        return "Estoy caminando...";
    }
}
