<?php
require_once 'coche.php';

$coche1 = new Coche("Amarillo", "Renault", "Clio", 4);
//Crear 3 coches más y mostrar su info 
echo $coche1->mostrarInfo();
