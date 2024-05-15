<?php
require_once 'persona.php';

class Informatico extends Persona
{
    private $lenguajes;
    private $expeciaProgramando;

    public function __construct($nombre, $apellidos, $altura, $edad, $lenguajes, $experiencia)
    {
        parent::__construct($nombre, $apellidos, $altura, $edad);
        // $this->nombre = $nombre;
        $this->lenguajes = $lenguajes;
        $this->expeciaProgramando = $experiencia;
    }



    /**
     * Get the value of lenguajes
     */
    public function getLenguajes()
    {
        return $this->lenguajes;
    }

    /**
     * Set the value of lenguajes
     *
     * @return  self
     */
    public function setLenguajes($lenguajes)
    {
        $this->lenguajes = $lenguajes;

        return $this;
    }

    /**
     * Get the value of expeciaProgramando
     */
    public function getExpeciaProgramando()
    {
        return $this->expeciaProgramando;
    }

    /**
     * Set the value of expeciaProgramando
     *
     * @return  self
     */
    public function setExpeciaProgramando($expeciaProgramando)
    {
        $this->expeciaProgramando = $expeciaProgramando;

        return $this;
    }

    public function programar()
    {
        return "Estoy programando...";
    }

    public function repararOrdenador()
    {
        return "El 90% de los fallos són el cable...";
    }

    public function hablar()
    {
        return "00110001001010";
    }
}
