<?php
require_once 'VehiculosRent.php';
require_once 'Flota.php';
require_once 'Coche.php';
require_once 'Cliente.php';
require_once 'Camion.php';
require_once 'Moto.php';
require_once 'ContratoAlquiler.php';
require_once 'carga_datos.php';
cargarDatos();
?>
<h1>Vista de los vehiculos de las flotas</h1>
<form action=<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>>
    <select name="opcion">
        <?php foreach ($VR->getFlotas() as $key=>$flota):?>
            <option value=<?= $key?>><?= $flota->getNombre()?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="enviar">
</form>
<?php
if(isset($_GET["opcion"])) {
    mostrarVehiculosFlota($_GET["opcion"]);
}else{
    mostrarVehiculosFlota(0);
}

function mostrarVehiculosFlota($opcion)
{
    global $VR;
    if($opcion < 0 || $opcion > count($VR->getFlotas())){
        echo "<p>Opción incorrecta!<p>";
        return;
    }
    //listar los vehiculos de la flota que tenga el indice de la opción
    $listaVehiculos = $VR->getFlotas()[$opcion]->getVehiculos();
    foreach ($listaVehiculos as $vehiculo) {
        echo "<ul>
                <li>Tipo: ".$vehiculo->getData()['tipo']."</li>
                <li>Matricula: ".$vehiculo->getData()['matricula']."</li>
                <li>Modelo: ".$vehiculo->getData()['modelo']."</li>
                <li>Marca: ".$vehiculo->getData()['marca']."</li>
                     
              </ul>";

    }

}
//var_dump($VR->getFlotas());
?>

