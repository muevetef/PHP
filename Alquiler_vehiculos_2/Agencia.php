<?php

class Agencia
{
    private string $nombre;
    private Flota $flota;
    private array $clientes;
    private array $contratos;

    /**
     * @param string $nombre
     * @param Flota $flota
     */
    public function __construct(string $nombre, Flota $flota)
    {
        $this->nombre = $nombre;
        $this->flota = $flota;
        $this->clientes = [];
        $this->contratos = [];
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getFlota(): Flota
    {
        return $this->flota;
    }

    public function setFlota(Flota $flota): void
    {
        $this->flota = $flota;
    }

    public function getClientes(): array
    {
        return $this->clientes;
    }

    public function setClientes(array $clientes): void
    {
        $this->clientes = $clientes;
    }

    public function getContratos(): array
    {
        return $this->contratos;
    }

    public function setContratos(array $contratos): void
    {
        $this->contratos = $contratos;
    }

    public function __toString(): string
    {
        return "Agencia: " . $this->nombre .
               ", Flota: " . $this->flota->getNombre().
               "\n";
    }
}