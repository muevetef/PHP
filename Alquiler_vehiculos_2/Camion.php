<?php
require_once 'Vehiculo.php';
class Camion extends Vehiculo
{
    private int $kg;

    public function __construct(string $matricula, string $marca, string $modelo,int $kg)
    {
        parent::__construct($matricula, $marca, $modelo);
        $this->kg = $kg;
    }

    public function getKg(): int
    {
        return $this->kg;
    }


    public function __toString()
    {
        $info  = "Tipo: Camión\n";
        $info .= parent::__toString();
        $info .= "Kg: " . $this->kg . "\n";

        return $info;
    }

    public function getData(): array
    {
        return [
            "matricula" => $this->matricula,
            "marca" => $this->marca,
            "modelo" => $this->modelo,
            "kg" => $this->kg
        ];
    }

}