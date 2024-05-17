<?php

class ContratoAlquiler
{
    private DateTime $fechaInicio;
    private DateTime $fechaFin;
    private float $precioDia;
    private Vehiculo $v;
    private Cliente $c;

    /**
     * @param DateTime $fechaInicio
     * @param DateTime $fechaFin
     * @param float $precioDia
     * @param Vehiculo $v
     * @param Cliente $c
     */
    public function __construct(string $fechaInicio, string $fechaFin, float $precioDia, Vehiculo $v, Cliente $c)
    {
        $this->fechaInicio = new DateTime($fechaInicio);
        $this->fechaFin = new DateTime($fechaFin);
        $this->precioDia = $precioDia;
        $this->v = $v;
        $this->c = $c;
    }

    public function getFechaInicio(): DateTime
    {
        return $this->fechaInicio;
    }

    public function setFechaInicio(DateTime $fechaInicio): void
    {
        $this->fechaInicio = $fechaInicio;
    }

    public function getFechaFin(): DateTime
    {
        return $this->fechaFin;
    }

    public function setFechaFin(DateTime $fechaFin): void
    {
        $this->fechaFin = $fechaFin;
    }

    public function getPrecioDia(): float
    {
        return $this->precioDia;
    }

    public function setPrecioDia(float $precioDia): void
    {
        $this->precioDia = $precioDia;
    }

    public function getVehiculo(): Vehiculo
    {
        return $this->v;
    }

    public function setVehiculo(Vehiculo $v): void
    {
        $this->v = $v;
    }

    public function getCliente(): Cliente
    {
        return $this->c;
    }

    public function setCliente(Cliente $c): void
    {
        $this->c = $c;
    }

    public function nDias(): false|int
    {
        return $this->fechaInicio->diff($this->fechaFin)->days;
    }

    public function costeTotal(): float{
        return $this->precioDia*$this->nDias();
    }

    public function getData(): array
    {
        return [
            'fechaInicio' => $this->fechaInicio->format('Y-m-d'),
            'fechaFin' => $this->fechaFin->format('Y-m-d'),
            'precioDia' => $this->precioDia,
            'v' => $this->v,
            'c' => $this->c
        ];
    }

}