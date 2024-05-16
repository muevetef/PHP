<?php
require_once 'Vehiculo.php';
class Coche extends Vehiculo
{
    private int $puertas;
    private int $plazas;

    public function __construct(string $matricula, string $marca, string $modelo,int $plazas, int $puertas)
    {
        parent::__construct($matricula, $marca, $modelo);
        $this->plazas = $plazas;
        $this->puertas = $puertas;
    }
    public function getPuertas(): int
    {
        return $this->puertas;
    }
    public function setPuertas(int $puertas): void
    {
        $this->puertas = $puertas;
    }
    public function getPlazas(): int
    {
        return $this->plazas;
    }
    public function setPlazas(int $plazas): void
    {
        $this->plazas = $plazas;
    }



    public function __toString()
    {
        $info  = "<ul>";
        $info .= parent::__toString();
        $info .= "<li>Puertas: " . $this->puertas . "</li>";
        $info .= "<li>Plazas: " . $this->plazas . "</li>";
        $info .= "</ul>";
        return $info;
    }

}