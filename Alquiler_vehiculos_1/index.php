<?php
require_once  'Moto.php';
require_once  'Camion.php';
require_once  'Coche.php';
require_once  'Cliente.php';
require_once  'Vehiculo.php';
require_once  'ContratoAlquiler.php';

$moto1 = new Moto("111111", "Yamaha", "RS", 250);
$coche1 = new Coche("2222222", "Renault", "Copa Turbo", 4, 2);
$camion1 = new Camion("3333333", "Mercedes", "XTRYU", 250);

$Cliente = new Cliente("12345678A", "Paco");

$contrato1 = new ContratoAlquiler(Date("Y-m-d"),"2024-6-16",80,$moto1,$Cliente);

echo $coche1;

var_dump($contrato1->getData());
echo "<br>";
echo $contrato1->nDias();
echo "<br>";
echo $contrato1->costeTotal();

/*while(true) {

    print "Escribe el nombre del cliente: ";
    fscanf(STDIN, "%s\n", $datos);
    echo "has escrito: " . $datos . "\n";
}*/