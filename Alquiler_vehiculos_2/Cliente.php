<?php

class Cliente
{
    private String $nif;
    private String $nombre;

    /**
     * @param String $nif
     * @param String $nombre
     */
    public function __construct(string $nif, string $nombre)
    {
        $this->nif = $nif;
        $this->nombre = $nombre;
    }

    public function getNif(): string
    {
        return $this->nif;
    }

    public function setNif(string $nif): void
    {
        $this->nif = $nif;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }
    public function __toString(): string
    {
        return "NIF: " . $this->nif . ", NOMBRE: " . $this->nombre;
    }

}