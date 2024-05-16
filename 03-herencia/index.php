<?php
require_once './informatico.php';
require_once './proyecto.php';
$persona = new Persona("Bryan", "Bauçà", 2, 18);
// var_dump($persona);
echo "<hr>";
echo $persona->hablar();
echo "<hr>";
$informatico = new Informatico("Jenifer", "Riera", 1.60, 22, "html, css, js", 1);
// var_dump($informatico);

// $informatico->setNombre("Paco");
// echo $informatico->getNombre() . " sabe "
//     . $informatico->getLenguajes()
//     . " y dice "
//     . $informatico->hablar();
$web = new Proyecto(10.4, $informatico);
// var_dump($web);
echo $web->mostrarDatos();
echo "<hr>";
echo $web->persona->hablar();

$date = new DateTime('2022/01/03');
echo $date->format('d-m-Y');
