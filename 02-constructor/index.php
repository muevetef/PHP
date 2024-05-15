<?php
require_once 'coche.php';

$coche1 = new Coche("Amarillo", "Renault", "Clio", 4);
$coche2 = new Coche("Rojo", "Peugeot", "206", 5);
$coche3 = new Coche("Verde", "BMW", "Cupra", 1, 10);
$coche4 = new Coche("Azul", "Porche", "Carrera", 3.5);
$coche4->setPotencia(200);
try {
    // $coche1->setColor(array("hola"));
} catch (TypeError $e) {
    echo "Error al establecer el nuevo color !";
}

//Crear 3 coches más y mostrar su info 
echo $coche1->mostrarInfo();
echo $coche2->mostrarInfo();
echo $coche3->mostrarInfo();
echo $coche4->mostrarInfo();
