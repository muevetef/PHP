<?php
require_once 'Vehiculo.php';
class Moto extends Vehiculo
{
    private int $cc;

    /**
     * @param int $cc
     */
    public function __construct(string $matricula, string $marca, string $modelo,int $cc)
    {
        parent::__construct($matricula, $marca, $modelo);
        $this->cc = $cc;
    }

    public function getCc(): int
    {
        return $this->cc;
    }

    public function setCc(int $cc): void
    {
        $this->cc = $cc;
    }

    public function __toString()
    {
        $info  = "<ul>";
        $info .= parent::__toString();
        $info .= "<li>CC: " . $this->cc . "</li>";
        $info .= "</ul>";
        return $info;
    }

    public function getData()
    {
        return [
            "matricula" => $this->matricula,
            "marca" => $this->marca,
            "modelo" => $this->modelo,
            "cc" => $this->cc
        ];
    }
}