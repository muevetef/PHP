<?php
class VehiculosRent
{
    private string $nif;
    private string $nombre;

    private array $clientes;
    private array $agencias;
    private array $flotas;
    public function __construct(string $nif, string $nombre){
        $this->nif = $nif;
        $this->nombre = $nombre;
        $this->clientes = [];
        $this->agencias = [];
        $this->flotas = [];
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

    public function getClientes(): array
    {
        return $this->clientes;
    }

    public function setClientes(array $clientes): void
    {
        $this->clientes = $clientes;
    }

    public function getAgencias(): array
    {
        return $this->agencias;
    }

    public function setAgencias(array $agencias): void
    {
        $this->agencias = $agencias;
    }

    public function getFlotas(): array
    {
        return $this->flotas;
    }

    public function setFlotas(array $flotas): void
    {
        $this->flotas = $flotas;
    }

    public function addFlota(Flota $flota): bool
    {
        foreach ($this->flotas as $fl){
            if($fl->getNombre() == $flota->getNombre()){
                return false;
            }
        }
        $this->flotas[] = $flota;
        return true;
    }

    public function vehiculoExists(string $matricula):bool{
        foreach ($this->flotas as $flota){
            if($flota->vehiculoExists($matricula)){
                return true;
            }
        }
        return false;
    }

}