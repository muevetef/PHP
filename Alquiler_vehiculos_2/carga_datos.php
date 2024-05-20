<?php
//cargar datos
$VR = new VehiculosRent("11223344A","Vehículos para alquilar");

function cargarDatosFlotas(){
    global $VR;
    $flotaRoja = new Flota("Zona Roja");
    $flotaVerde = new Flota("Zona Verde");
    $flotaAmarilla = new Flota("Zona Amarilla");
    $flotaAzul = new Flota("Zona Azul");

    $VR->addFlota($flotaRoja);
    $VR->addFlota($flotaVerde);
    $VR->addFlota($flotaAmarilla);
    $VR->addFlota($flotaAzul);
}
function cargarDatosVehiculos(){
    $coche = new Coche("1122ABC", "Audi", "TT", 2, 4);
    $moto = new Moto("2233LML", "Piaggio", "Liberty", 125);
    $camion = new Camion("3344HJK", "Renault", "Jumpy", 560);
    global $VR;
    $VR->getFlotas()[0]->addVehiculo($coche);
    $VR->getFlotas()[0]->addVehiculo($moto);
    $VR->getFlotas()[1]->addVehiculo($moto);
    $VR->getFlotas()[2]->addVehiculo($camion);
}

function cargarDatosAgencias()
{
    global $VR;
    $agencia_central = new Agencia("Agencia Central", $VR->getFlotas()[0]);
    $VR->addAgencia($agencia_central);
    $agencia_oeste = new Agencia("Agencia Oeste", $VR->getFlotas()[1]);
    $VR->addAgencia($agencia_oeste);
    $agencia_este = new Agencia("Agencia Este", $VR->getFlotas()[2]);
    $VR->addAgencia($agencia_este);
}

function cargarDatos(){
    cargarDatosFlotas();
    cargarDatosVehiculos();
    cargarDatosAgencias();
}
//Carga inicial de datos -> se hará desde una consulta a la BBDD

cargarDatos();
//var_dump($VR);