<?php

class Flota
{
    private string $nombre;
    private array $vehiculos;
    public function __construct(string $nombre){
        $this->nombre = $nombre;
        $this->vehiculos = [];
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getVehiculos(): array
    {
        return $this->vehiculos;
    }

    public function setVehiculos(array $vehiculos): void
    {
        $this->vehiculos = $vehiculos;
    }

    public function addVehiculo(Vehiculo $vehiculo): bool{
        foreach ($this->vehiculos as $veh){
            if($veh->getMatricula() == $vehiculo->getMatricula()){
                return false;
            }
        }
        $this->vehiculos[] = $vehiculo;
        return true;
    }

   public function listVehiculos():string{
        //TODO mejorable no devolver string en esta capa
       $str = "La flota ".$this->nombre;
       if(empty($this->vehiculos)){
           $str .= " no tiene vehiculos\n";
       }else{
           $str .= " tiene los siguientes vehiculos \n";
           foreach ($this->vehiculos as $veh){
               $str .= $veh."\n";
           }
       }
       $str .= "----------------------------------------------";
       return $str;
   }
}